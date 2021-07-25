<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\NotesController;


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

Route::get('/', 'App\Http\Controllers\NotesController@index');

Route::get('notes/create', 'App\Http\Controllers\NotesController@create');
Route::get('notes/display', 'App\Http\Controllers\NotesController@index');
Route::get('notes/display/{id}', ['uses' => 'App\Http\Controllers\NotesController@retrieve']);
Route::post('notes', 'App\Http\Controllers\NotesController@store');
Route::post('notes/update', 'App\Http\Controllers\NotesController@update');
Route::post('notes/delete', 'App\Http\Controllers\NotesController@delete');
