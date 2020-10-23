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
    return view('index');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/forum/create', function () {
    return view('create-posting');
});

Route::get('/forum/show', function () {
    return view('show');
});

Route::get('/forum/edit', function () {
    return view('edit');
});

Route::get('/biodata', function () {
    return view('biodata');
});