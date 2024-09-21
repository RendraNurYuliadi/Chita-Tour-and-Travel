<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'user_message' => $request->input('message'),
        ];

        Mail::send('emails.contact', $data, function ($mail) use ($data) {
            $mail->to('mariska1782@gmail.com') // Email penerima
                 ->subject('New Contact Message from ' . $data['name'])
                 ->from($data['email'], $data['name']); // Email pengirim
        });

        // Redirect to notification view with a success message
        return redirect()->route('notification')->with('success', 'Message sent successfully!');
    }
}
