<?php

use Illuminate\Support\Facades\Route;
use App\Humor;

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

//top page//
Route::get('/', 'App\Http\Controllers\MembersController@show')->name('show_chart');
