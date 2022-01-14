<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CreateUser;
use App\Http\Livewire\IndexUser;
use App\Http\Livewire\EditUser;
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

Route::get("/",IndexUser::class);
Route::get("/create",CreateUser::class);
Route::get("/edit/{user}",EditUser::class);
