<?php

namespace App\Livewire\Chat;

use Livewire\Component;
use App\Models\Conversation;

class Chat extends Component
{
    public $id;
    public $selectedConversation;

    public function mount(){
        $this->selectedConversation = Conversation::findOrFail($this->id);
    }

    public function render()
    {
        return view('livewire.chat.chat');
    }
}
