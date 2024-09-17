<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::post('/midtrans-callback', [OrderController::class, 'callback']);
