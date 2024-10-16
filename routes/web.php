<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('participants/{id}', [ParticipantController::class, 'show']);
