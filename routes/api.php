<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageApiController;
use App\Http\Controllers\ProductApiController;



Route::get('/products/{product}',[ProductApiController::class,'show'])->name('api.products.show');
Route::get('/products', [ProductApiController::class,'index'])->name('api.products.index');

Route::post('/messages',[MessageApiController::class,'store'])->name('api.messages.store');

