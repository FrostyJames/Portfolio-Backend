<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:1000',
        ]);

        // Send email
        Mail::raw($validated['message'], function ($mail) use ($validated) {
            $mail->to('ivan.james.ke@gmail.com')
                 ->subject("Contact Form: " . $validated['subject'])
                 ->replyTo($validated['email']);
        });

        return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
    }
}
