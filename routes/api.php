<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageApiController;
use App\Http\Controllers\ProductApiController;



Route::get('/productos/{producto}',[ProductApiController::class,'show'])->name('api.productos.show');

Route::post('/messages',[MessageApiController::class,'store'])->name('api.messages.store');