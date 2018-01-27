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
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::namespace('Admin')->group(function () {
        Route::prefix('admin')->group(function () {

            Route::get('/', 'IndexController@index')->name('admin.index');
            Route::name('admin.')->group(function () {
                Route::resource('projects', 'ProjectController');
            });

        });
    });
});

Route::namespace('Site')->group(function () {
    Route::name('site.')->group(function () {
        Route::get('/', 'IndexController@index')->name('index');
        Route::get('sobre', 'SobreController@index')->name('sobre');
        Route::get('curriculo', 'CurriculoController@index')->name('curriculo');
        Route::get('portfolio', 'PortfolioController@index')->name('portfolio');
        Route::get('contato', 'ContatoController@index')->name('contato');
    });
});