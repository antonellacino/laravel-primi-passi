<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {

$contacts=[
    'Mario','Gianni','Filippo','Giulio'

];
    return view('contact',compact('contacts'));
});

