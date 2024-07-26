<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',
[
"title" => "Home"
]
);
})->name('home');

Route::get('/about-us', function () {
    return view('about'); 
});
