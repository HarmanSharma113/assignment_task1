<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
Route::get('/digital-clock', function () {
    return view('clock_view'); //select diff time zone to view for the clock
});

Route::get('/people/hierarchy', [PersonController::class, 'showHierarchy'])->name('people.hierarchy');

// http://127.0.0.1:8000/digital-clock
// http://127.0.0.1:8000/people/hierarchy
