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
Route::get('/about', function () {
    return view('about');
});
Route::get('/story', function () {
    return view('story');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/getinvolved', function () {
    return view('getinvolved');
});
Route::get('/add', function () {
    return view('add');
});

Route::post('/insertContact','DataController@contact');
Route::post('/insertArticle','DataController@article');