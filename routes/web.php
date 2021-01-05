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

use App\Http\Controllers\StoryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/story', [StoryController::class, 'list']);

Route::get('/stories/{id}', [StoryController::class, 'read']);
Route::post('/stories', [StoryController::class, 'create']);


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/getinvolved', function () {
    return view('getinvolved');
});
Route::get('/add', function () {
    return view('add');
});
Route::get('/joshlyene', function () {
    return view('joshlyene');
});
Route::get('/karen', function () {
    return view('karen');
});
Route::get('/bella', function () {
    return view('bella');
});
Route::get('/ediva', function () {
    return view('ediva');
});
Route::get('/kevin', function () {
    return view('kevin');
});
Route::get('/angel', function () {
    return view('angel');
});
Route::get('/celine', function () {
    return view('celine');
});
Route::get('/more', function () {
    return view('more');
});
Route::post('/insertContact','DataController@contact');
Route::post('/insertArticle','DataController@article');
