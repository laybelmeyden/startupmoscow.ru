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

Route::get('/', 'MainController@index');

Route::post('/send', 'ProjectsController@uploadSubmit');

Route::get('/upload', 'ProjectsController@uploadForm');

Route::get('/mainform', 'MainController@mainform');


Route::get('/soloproject{solo}','ProjectsController@projectsolo');

Route::get('/about','MainController@about');

Route::get('/comand','MainController@comand');

Route::get('/contact', 'MainController@contact');

Route::get('/invest', 'MainController@invest');

Route::get('/media', 'MainController@media');

Route::get('/onenews{solo}', 'MainController@onenews');

Route::get('/allnews', 'MainController@allnews');

Route::get('/oferta', 'MainController@oferta');

Route::get('/pers', 'MainController@pers');

Route::get('/cur', 'MainController@cur');
Route::post('/sendto', 'MessagesController@send');
Route::post('/donate','MessagesController@donate');
Route::post('/sendcontact', 'MessagesController@donate');
Route::post('/soloprojectform', 'MessagesController@soloproject');

Route::get('/projects', 'ProjectsController@projects');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
