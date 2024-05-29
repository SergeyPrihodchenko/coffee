<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessagerRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagerController extends Controller
{
    public function renderMessages()
    {
        if(!empty(auth()->user()->id)) {
            $id = auth()->user()->id;

            $messages = Message::all(['user_id', 'text']);

            $data['messages'] = $messages;
            $data['auth_id'] = $id;

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

    public function deleteUserMessages(): bool
    {
        return true;
    }

    public function blockMessager(): bool
    {
        return true;
    }
}
