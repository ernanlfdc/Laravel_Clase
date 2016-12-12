<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/study/index/{page?}', function ($page = 0) {
    return 'Página ' . $page . ' del index';
})
->where('page','[0-9]+');

Route::get('/study/delete/{id}', function () {
    return view('study/delete',['id' => $id]);
});

Route::get('/study/new', function () {
    return view('study/new');
});

Route::get('/study/insert', function () {
    return view('study/insert');
});

Route::get('/study/edit/{id}', function ($id) {
    return 'Editando elemento ' . $id;
});

Route::get('/study/update', function () {
    return view('study/update');
});
