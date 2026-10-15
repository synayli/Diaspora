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
        // Honeypot: real visitors never see or fill this field, bots usually do
        if ($request->filled('website')) {
            return back();
        }

        $data = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'phone'   => 'nullable|string|max:30',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:5000',
        ]);

        try {
            Mail::to(config('mail.contact_to'))->send(new ContactMessage($data));
        } catch (\Throwable $e) {
            Log::error('Contact form mail failed: ' . $e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'Sorry, your message could not be sent. Please try again or email us directly.');
        }

        return back()->with('success', 'Thank you. Your message has been sent and our team will be in touch soon.');
    }
}