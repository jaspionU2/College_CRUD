<?php

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Students', [CollegeController::class, '']);