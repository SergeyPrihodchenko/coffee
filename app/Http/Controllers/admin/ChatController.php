<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function chatPanel()
    {
        $messages = DB::table('messages')
        ->join('users', 'messages.user_id', '=', 'users.id')
        ->select(['users.name', 'users.email', 'messages.text', 'messages.created_at'])
        ->get()->toArray();

        $sortMessages = [];

        foreach($messages as $message) {
            $sortMessages[$message->email][] = $message;
        }

        return view('Admin.dashboardChats', ['messages' => $sortMessages]);
    }
}
