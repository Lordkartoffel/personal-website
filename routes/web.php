<?php

use Illuminate\Support\Facades\Route;


//Homepage
Route::get('/', function () {
    return view('index');
});

