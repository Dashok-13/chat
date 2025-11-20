<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conversation extends Model
{
    protected $fillable = [
        'receiver_id',
        'sender_id'
    ];

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    // Додайте ці відношення
    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function getReceiver()
    {
        if($this->sender_id === auth()->id()){
            return User::firstWhere('id', $this->receiver_id);
        } else{
            return User::firstWhere('id', $this->sender_id);
        }
    }
}