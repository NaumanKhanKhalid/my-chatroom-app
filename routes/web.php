<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return redirect()->route('login.show');
});


Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.show');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {

    Route::view('/no-chat', 'components.no-chat')->name('view.noChat');

    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::get('/chat/user/{id}', [ChatController::class, 'getUserChat'])->name('user.chat');
    // Route::get('/', [MessageController::class, 'index'])->name('index');
    Route::get('/fetchMessages/{receiverId}', [MessageController::class, 'fetchMessages']);
    Route::post('/sendMessage', [MessageController::class, 'sendMessage'])->name('sendMessage');
});
