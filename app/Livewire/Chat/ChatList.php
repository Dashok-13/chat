<?php

namespace App\Livewire\Chat;

use Livewire\Component;
use App\Models\Conversation;

class ChatList extends Component
{
    public $selectedConversation;

    public function selectConversation($conversationId)
    {
        $this->selectedConversation = Conversation::find($conversationId);
        $this->dispatch('conversationSelected', $this->selectedConversation);
    }

    public function render()
    {
        $user = auth()->user();
        
        $conversations = Conversation::with(['sender', 'receiver'])
            ->where('sender_id', $user->id)
            ->orWhere('receiver_id', $user->id)
            ->latest('updated_at')
            ->get();

        return view('livewire.chat.chat-list', [
            'conversations' => $conversations
        ]);
    }
}