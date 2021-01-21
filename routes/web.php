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
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPositionController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', [UserController::class, 'list']);

Route::get('/story', [StoryController::class, 'list']);

Route::get('/stories/{id}', [StoryController::class, 'read']);
Route::post('/stories', [StoryController::class, 'create']);


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/getinvolved', function () {
    return view('getinvolved');
});
Route::get('/add', [UserPositionController::class, 'list']);
Route::post('/users', [UserController::class, 'create']);

Route::get('/more', function () {
    return view('more');
});
Route::post('/insertContact','DataController@contact');
Route::post('/insertArticle','DataController@article');
