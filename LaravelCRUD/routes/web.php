<?php

use App\Http\Controllers\CompanyCRUDController;
use Illuminate\Support\Facades\Route;

Route::resource('companies',CompanyCRUDController::class);

Route::get('/', function () {
    return view('welcome');
});
