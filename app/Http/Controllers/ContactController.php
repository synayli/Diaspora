<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Honeypot: bots may fill this hidden field
        if ($request->filled('website')) {
            return back();
        }

        // Validate the contact form fields
        $data = $request->validate([
            'name'         => 'required|string|max:100',
            'organisation' => 'nullable|string|max:150',
            'email'        => 'required|email|max:150',
            'subject'      => 'required|string|max:150',
            'message'      => 'required|string|max:5000',
        ]);

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
                );
        }

        // Return to Contact and trigger the Thank You popup
        return redirect('/#contact')->with(
            'success',
            'Thank you. Your message has been sent and our team will be in touch soon.'
        );
    }
}
