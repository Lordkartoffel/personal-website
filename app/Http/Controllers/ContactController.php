<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(ContactFormRequest $request)
    {
        // Anti-bot protection - honeypot field
        if ($request->filled('website')) {
            return redirect()->back()->with('success', 'Thank you for your message!');
        }

        // Get validated data
        $validated = $request->validated();

        // Send email (you can configure this in your .env file)
        try {
            Mail::to(config('mail.from.address'))->send(new ContactFormMail($validated));
            return redirect()->back()->with('success', 'Thank you for your message! I\'ll get back to you soon.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sorry, there was an error sending your message. Please try again.');
        }
    }
} 