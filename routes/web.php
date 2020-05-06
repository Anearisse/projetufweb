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
route::resource('biens', 'BienController');

Route::resource ('biens', 'BiensController', [
        'only' => ['edit', 'update', 'destroy', 'showuser'],
        'parameters' => ['users' => 'user']
    ]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::resource('image', 'ImageController');

Auth::routes(); 