<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Honeypot: bots may fill this hidden field
        if ($request->filled('website')) {
            return redirect('/#contact');
        }

        // Validate the contact form fields
        $validator = Validator::make($request->all(), [
            'name'                  => 'required|string|max:100',
            'organisation'          => 'nullable|string|max:150',
            'email'                 => 'required|email|max:150',
            'subject'               => 'required|string|max:150',
            'message'               => 'required|string|max:5000',
            'g-recaptcha-response'  => 'required|string',
        ], [
            'g-recaptcha-response.required' =>
                'Please tick the "I\'m not a robot" checkbox.',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->withFragment('contact');
        }

        $data = $validator->validated();

        // Verify Google reCAPTCHA v2 on the server
        try {
            $captchaResponse = Http::asForm()
                ->timeout(10)
                ->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret'   => config('services.recaptcha.secret_key'),
                    'response' => $request->input('g-recaptcha-response'),
                    'remoteip' => $request->ip(),
                ]);

            if (
                !$captchaResponse->successful() ||
                !$captchaResponse->json('success')
            ) {
                return back()
                    ->withInput()
                    ->withErrors([
                        'g-recaptcha-response' =>
                            'Verification failed. Please try again.',
                    ])
                    ->withFragment('contact');
            }

        } catch (\Throwable $e) {
            Log::error('Google reCAPTCHA verification failed: ' . $e->getMessage());

            return back()
                ->withInput()
                ->withErrors([
                    'g-recaptcha-response' =>
                        'Verification is temporarily unavailable. Please try again.',
                ])
                ->withFragment('contact');
        }

        // Remove CAPTCHA token before passing data to the email
        unset($data['g-recaptcha-response']);

        try {
            // Send the enquiry to the company email
            Mail::to(config('mail.contact_to'))
                ->send(new ContactMessage($data));

        } catch (\Throwable $e) {
            Log::error('Contact form mail failed: ' . $e->getMessage());

            return back()
                ->withInput()
                ->with(
                    'error',
                    'Sorry, your message could not be sent. Please try again or email us directly.'
                )
                ->withFragment('contact');
        }

        // Return to Contact and trigger the Thank You popup
        return redirect('/#contact')->with(
            'success',
            'Thank you. Your message has been sent and our team will be in touch soon.'
        );
    }
}
