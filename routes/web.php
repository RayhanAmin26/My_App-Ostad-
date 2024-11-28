<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Laravel Response
Route::get('/demo1',[DemoController::class,'demo1']);

//Laravel Request
Route::get('/demo2',[DemoController::class,'demo2']);