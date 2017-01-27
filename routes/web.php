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


Auth::routes();

Route::get('/', 'ArticlesController@index');

Route::group(['prefix' => 'articles'], function () {

    Route::get('/', 'ArticlesController@index');
    Route::get('/create', 'ArticlesController@create');
    Route::post('/', 'ArticlesController@store');
    Route::get('/{article}', 'ArticlesController@show')->name('show.article');
    Route::get('/{article}/edit', 'ArticlesController@edit')->name('edit.article');
    Route::put('/{article}', 'ArticlesController@update')->name('update.article');
    Route::delete('/{article}', 'ArticlesController@destroy')->name('delete.article');

    Route::get('/tags/{tag}', 'ArticlesController@getArticlesByTag')->name('byTag.article');

});