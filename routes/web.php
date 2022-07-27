<?php

use App\Models\Prototype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrototypeController;

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


/*
| PROTOTYPE CONTROLLER
---------------------------------------------*/

// All prototypes
Route::get('/', [PrototypeController::class, 'index']);

// Create prototype form
Route::get('/prototypes/create', [PrototypeController::class, 'create'])->middleware('auth');

// Store prototype data
Route::post('/prototypes', [PrototypeController::class, 'store'])->middleware('auth');

// Edit prototype form data
Route::get('/prototypes/{prototype}/edit', [PrototypeController::class, 'edit'])->middleware('auth');

// Update prototype form data
Route::put('/prototypes/{prototype}', [PrototypeController::class, 'update'])->middleware('auth');

// Delete prototype form data
Route::delete('/prototypes/{prototype}', [PrototypeController::class, 'destroy'])->middleware('auth');

// Manage prototypes
Route::get('/prototypes/manage', [PrototypeController::class, 'manage'])->middleware('auth');

// Single prototype: Using Route-Model binding
Route::get('/prototypes/{prototype}', [PrototypeController::class, 'show']);



/*
| USER CONTROLLER
---------------------------------------------*/
// Show Register (create) form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Store created user 
Route::post('/users', [UserController::class, 'store']);

// Logout user 
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login user form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Authenticate and Login user 
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


