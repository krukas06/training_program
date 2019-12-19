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

Route::post('/mail', 'MailController@send_message');

Route::get('/teory', 'CursController@teory');
Route::get('/conspect', 'CursController@conspect');
Route::get('/test', 'CursController@test_t');
Route::get('/news', 'PostController@list_message');
Route::resource('post', 'PostController',['parametres'=>[
    'post'=>'id'
]
]);
