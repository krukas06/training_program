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
Route::get('logout','Auth\LoginController@logout');

//главная
Route::get('/', function () {
    return view('index');
});

//отправка письма на почту
Route::post('/mail', 'MailController@send_message');


//открыть теорию
Route::get('/teory', 'CursController@teory');
//открыть конспект
Route::get('/conspect', 'CursController@conspect');
//открыть тест
Route::get('/test', 'CursController@test_t');


//список всех новостей
Route::get('/news', 'PostController@list_message');

//выбор одной новости
Route::resource('post', 'PostController',['parametres'=>[
    'post'=>'id'
]
]);

//админка
Route::get('/admin', function () {
    return view('admin_panel');
});

Route::get('add/news', function () {
    return view('newsadd');
});

//Добавление новости
Route::resource('/add', 'PostController')->only(['store'])->middleware('auth');

//Список новостей
Route::get('/list', 'PostController@index');

//Удаление новостей
Route::post('/del', 'PostController@deletePost')->middleware('auth');

