<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PagesController;
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
//Laravel 8(New)
Route::get('/', [PagesController::class, 'index']);
