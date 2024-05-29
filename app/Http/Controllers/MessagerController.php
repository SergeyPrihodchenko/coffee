<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessagerRequest;
use App\Models\AdminMessages;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagerController extends Controller
{
    public function renderMessages()
    {
        if(!empty(auth()->user()->id)) {

            $id = auth()->user()->id;

            $userMessages = Message::where('user_id', $id)->get()->toArray();
            $adminMessages = AdminMessages::where('to_user_id', $id)->get()->toArray();

            $messages = array_merge($userMessages, $adminMessages);

            usort($messages, fn($a, $b) => $a['created_at'] > $b['created_at']);

            $data['auth_id'] = $id;

            $data['messages'] = $messages;

            return $data;

        } else {
            return false;
        }
    }

    public function createMessage(MessagerRequest $request): array
    {
        $validated = $request->validated();

        $validated['user_id'] = auth()->user()->id;

        $result = Message::create($validated);

        return ['result' => (boolean)$result];
    }
}
