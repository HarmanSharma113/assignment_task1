<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); // check if user is already authenticated
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']); // log out user

// Route::get('/test', function () {
//     dd("value"); //test route
// });

Route::post('/register', [AuthController::class, 'register']); //register user with details

Route::post('/login', [AuthController::class, 'login']); // login with phone or email

// http://127.0.0.1:8000/register
// http://127.0.0.1:8000/login
// http://127.0.0.1:8000/logout
// http://127.0.0.1:8000/user
