<?php

use App\Events\ServerCreated;
use App\Http\Controllers\ProcessWebhookController;
use App\Livewire\Receivehook;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    ds('testando 1');
    return view('livewire.receivehook');
});


Route::get('/webhook', ProcessWebhookController::class);
