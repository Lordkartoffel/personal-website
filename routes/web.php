<?php

use Illuminate\Support\Facades\Route;


//Homepage
Route::get('/', function () {
    return view('home');
});

//Ressource Page
Route::get('/ressources', function () {
    return view('ressources');
});

//Contact Page
Route::get('/contact', function () {
    return view('contact');
});

//About Page
Route::get('/about', function () {
    return view('about');
});
