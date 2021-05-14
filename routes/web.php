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

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPositionController;

// Page Routing
Route::get('/', function () {
    return view('home');
});
Route::get('/about-us', [UserController::class, 'list']);

Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/get-involved', function () {
    return view('get-involved');
});
Route::get('/more', function () {
    return view('more');
});

Route::get('/add', [UserPositionController::class, 'list']);

// Queries related
Route::get('/stories/{id}', [StoryController::class, 'read']);
Route::get('/stories', [StoryController::class, 'list']);
Route::post('/stories', [StoryController::class, 'create']);

Route::get('/users', [UserController::class, 'getList']);
Route::post('/users', [UserController::class, 'create']);

Route::post('/inquiries', [InquiryController::class, 'create']);
