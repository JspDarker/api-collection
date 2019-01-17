<?php use Illuminate\Support\Facades\Route;

Route::get('/a', function () {
    return view('welcome');
});

Route::get('/', 'PageController@index')->name('home');

Route::prefix('king')->group(function () {
    Route::get('/', 'Backend\HomeController@index')->name('king.index');

    Route::group(['prefix' => 'info'], function () {
        Route::get('/', 'Backend\CustomerController@index')->name('king.user.index');
        Route::get('add', 'Backend\CustomerController@create')->name('king.user.create');
        Route::post('add', 'Backend\CustomerController@store')->name('king.user.store');
        Route::get('show/{id}', 'Backend\CustomerController@show')->name('king.user.show');
    });

});