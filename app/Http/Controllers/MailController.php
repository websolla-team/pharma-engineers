<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required|string',
        ]);
        Message::create($data);
        return back()->with('success', __('main.we recive your message successfully'));
    }

    public function subscribe(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:255',
        ]);
        Newsletter::create($data);
        return redirect()->route('home')->with('success', __('main.we recive your email successfully'));
    }
}
