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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/article/cetak_pdf', function () {
//     return 'Nama : Muhammad Nur Amin<br>
//             NIM:1931710041';
// });
// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman artikel dengan id '.$id;
// });

//Route::get('/', 'HomeController@home');
Route::get('/about', 'AboutController@about');
Route::get('/article', 'ArticleController@article');
Route::get('/article/{article}', 'ArticleController@show');
Route::get('/page', 'PageController@page');
Route::get('/', 'Home1Controller@home1')->name('home1');
Auth::routes();

Route::get('/auth', 'HomeController@home');
Route::get('/manage', 'ArticleController@index')->name('manage');
Route::get('/manage/user', 'UserController@manageUser')->name('manageUser');
Route::get('/add','ArticleController@add');
Route::post('/add/create','ArticleController@create');
Route::get('/edit/{id}','ArticleController@edit');
Route::post('/article/update/{id}','ArticleController@update');
Route::get('/article/delete/{id}','ArticleController@delete');


Route::get('/manage/user', 'UserController@index')->name('manageUser');
Route::get('/user/add','UserController@add');
Route::post('/user/create','UserController@create');
Route::get('/user/edit/{id}','UserController@edit');
Route::post('/user/update/{id}','UserController@update');
Route::get('/user/delete/{id}','UserController@delete');

Route::get('/pages', 'ArticleController@cetak');
Route::get('/printuser','UserController@cetak');