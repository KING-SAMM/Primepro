<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Prototype;

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

// All prototypes
Route::get('/', function () 
{
    return view('prototypes', [
        'heading' => 'Primeproduct Prototypes',
        'prototypes' => Prototype::all()
    ]);
});

// Single prototype
Route::get('/prototypes/{id}', function($id) 
{
    return view('prototype', [
        'prototype' => Prototype::find($id)
    ]);
});


