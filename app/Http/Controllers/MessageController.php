<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'sender_name' => 'required|string|max:255',
            'message_content' => 'required|string',
        ]);

        Message::create([
            'sender_name' => $request->sender_name,
            'message_content' => $request->message_content,
        ]);

        return redirect()->back()->with('success', 'Message sent successfully.');
    }
}
