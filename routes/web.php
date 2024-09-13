<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', [ContactController::class,'index']);
Route::get('/contacts/create', [ContactController::class,'create'])->middleware('auth');
Route::post('/contacts', [ContactController::class,'store'])->middleware('auth');
Route::get('/contacts/{id}', [ContactController::class,'show'])->middleware('auth');
Route::get('/contacts/{contact}/edit', [ContactController::class,'edit'])->middleware('auth')->name('edit');
Route::put('/contacts/{contact}/update', [ContactController::class,'update'])->middleware('auth')->name('update');
Route::delete('/contacts/{contact}/delete', [ContactController::class,'destroy'])->middleware('auth')->name('delete');


Route::middleware('guest')->group(function () 
{
    Route::get('/register', [RegisteredUserController::class,'create']);
    Route::post('/register', [RegisteredUserController::class,'store']);

    Route::get('/login', [SessionController::class,'create'])->name('login');
    Route::post('/login', [SessionController::class,'store']);
});


Route::delete('/logout', [SessionController::class,'destroy'])->middleware('auth');