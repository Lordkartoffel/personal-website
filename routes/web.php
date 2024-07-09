<?php

use Illuminate\Support\Facades\Route;


//Homepage
Route::get('/home', function () {
    return view('home');
});

//Download Page
Route::get('/download', function () {
    return view('downlaod');
});

//Contact Page
Route::get('/contact', function () {
    return view('contact');
});

//About Page
Route::get('/about', function () {
    return view('about');
});
