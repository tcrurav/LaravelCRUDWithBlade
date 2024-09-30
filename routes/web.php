<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BicycleController;
 
Route::resource('bicycles', BicycleController::class);
