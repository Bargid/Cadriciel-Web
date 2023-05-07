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

use App\Http\Controllers\LouisProfileController;

Route::get('/', [LouisProfileController::class, 'home']);
Route::get('/home', [LouisProfileController::class, 'home']);
Route::get('/projects', [LouisProfileController::class, 'projects']);
Route::get('/resume', [LouisProfileController::class, 'resume']);

Route::get('/contact', [LouisProfileController::class, 'contact']);
Route::post('/contact', [LouisProfileController::class, 'contactForm']);
