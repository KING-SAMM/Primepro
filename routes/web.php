<?php

use App\Http\Controllers\PrototypeController;
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
Route::get('/', [PrototypeController::class, 'index']);

// Create prototype form
Route::get('/prototypes/create', [PrototypeController::class, 'create']);

// Store prototype data
Route::post('/prototypes', [PrototypeController::class, 'store']);

// Edit prototype form data
Route::get('/prototypes/{prototype}/edit', [PrototypeController::class, 'edit']);

// Update prototype form data
Route::put('/prototypes/{prototype}', [PrototypeController::class, 'update']);

// Single prototype: Using Route-Model binding
Route::get('/prototypes/{prototype}', [PrototypeController::class, 'show']);




