<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    $name_home = 'questa è la home';
    return view('home', compact('name_home'));
});

Route::get('/contacts', function () {
    
    $contacts = [
        'contact1' => 'Marco',
        'contact2' => 'Giovanni',
        'contact3' => 'Paolo'
    ];

    return view('contacts', compact('contacts'));
});

Route::get('/about', function () {
    
    return view('about');
});

