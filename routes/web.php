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
        'heading' => 'Prototypes Listings',
        'prototypes' => Prototype::all()
    ]);
});

// Single prototype: Using Route-Model binding
Route::get('/prototypes/{prototype}', function(Prototype $prototype) 
{
    return view('prototype', [
        'prototype' => $prototype
    ]);
});


