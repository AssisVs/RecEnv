<?php

use App\Http\Controllers\ProcessWebhookController;
use App\Livewire\CreatePost;
use App\Livewire\Receivehook;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    ds('testando 1');
    return view('livewire.receivehook');
});

Route::get('/create-post', CreatePost::class);

Route::get('/webhook', ProcessWebhookController::class)->name('process-webhook');
