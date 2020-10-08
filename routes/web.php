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
// Route::get('/about', function () {
//     return 'Nama : Muhammad Nur Amin<br>
//             NIM:1931710041';
// });
// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman artikel dengan id '.$id;
// });

//Route::get('/', 'HomeController@home');
Route::get('/about', 'AboutController@about');
Route::get('/article', 'ArticleController@article');
Route::get('/page', 'PageController@page');
Route::get('/', 'Home1Controller@home1');
Auth::routes();

Route::get('/auth', 'HomeController@home');
