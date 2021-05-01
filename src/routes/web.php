<?php

use Illuminate\Support\Facades\Route;
use App\Models\Humor;

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
Route::get('/', 'App\Http\Controllers\MembersController@index')->name('index');
Route::get('/search', 'App\Http\Controllers\MembersController@search')->name('search');
Route::get('/detail', 'App\Http\Controllers\MembersController@detail')->name('detail');