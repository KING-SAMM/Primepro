<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/hello', function () {
    return response('<h1>Hello KC Samm</h1>', 200)
        ->header('Content-Type', 'text/html')
        ->header('foo', 'bar');
});

Route::get('/posts/{id}', function ($id) {
    ddd($id);
    return response('<h1>Post ' . $id . '</h1>');
})->where('id', '[0-9]+');
