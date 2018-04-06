<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/create-train', function () {
    return view('ui-forms.create-train');
});

Route::get('/create-station', function () {
    return view('ui-forms.create-station');
});

Route::get('/create-record', function () {
    return view('ui-forms.create-record');
});