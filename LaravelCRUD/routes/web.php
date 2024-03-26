<?php

use App\Http\Controllers\CompanyCRUDController;
use Illuminate\Support\Facades\Route;

Route::resource('companies',CompanyCRUDController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function(){
    return view(('login'));
});
