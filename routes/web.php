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
//выюор одного курса
Route::resource('lesson', 'LessonController',['parametres'=>[
    'lesson'=>'id'
]
]);

/*Route::get('/post/{id}', 'PostController@show');*/

//админка
Route::get('/admin', function () {
    return view('admin_panel');
});

Route::get('add/news', function () {
    return view('newsadd');
});

Route::get('add/lesson', function () {
    return view('lessonadd');
});

//Добавление новости
Route::resource('/add', 'PostController')->only(['store'])->middleware('auth');

//Список новостей
Route::get('/list', 'PostController@index');

//Список курсов
Route::get('/listcurs', 'LessonController@list_lessons');

//Список заявок
Route::get('/listorder', 'CursController@list_order');

//Удаление новостей
Route::post('/del', 'PostController@deletePost')->middleware('auth');

//Удаление курса
Route::post('/delcurs', 'LessonController@deleteLesson')->middleware('auth');

//Список курсов
Route::get('/lessons', 'LessonController@index');

//Добавление курса
Route::resource('/addcurs', 'LessonController')->only(['store'])->middleware('auth');

//Добавление заявки на запись
Route::post('/add_order', 'CursController@add_orders');

//Главная школы юнный инженер
Route::get('/ingeneer', 'CursController@index');

//Добавление заявки на запись юный инженер
Route::post('/add_order_ing', 'CursController@add_orders_ing');
