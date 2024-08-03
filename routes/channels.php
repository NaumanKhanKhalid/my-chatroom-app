<?php
use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('chat.{receiverId}', function (User $user, $receiverId) {
    return (int) $user->id === (int) $receiverId || (int) $user->id === (int) auth()->id();
});
