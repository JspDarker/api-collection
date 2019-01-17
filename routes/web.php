<?php use Illuminate\Support\Facades\Route;

Route::get('/a', function () {
    return view('welcome');
});

Route::get('/', 'PageController@index')->name('home');