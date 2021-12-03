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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/check', 'HomeController@check')->name('check');
Route::post('/import-file', 'HomeController@import')->name('import-file');
Route::get('/import', 'HomeController@importView')->name('importView');
Route::get('/export', 'HomeController@exportView')->name('exportView');
Route::get('/export-date', 'HomeController@betweenDateView')->name('betweenDateView');
Route::post('/export-file', 'HomeController@export')->name('export-file');
Route::get('/export-pdf', 'HomeController@exportPDF')->name('exportPDF');
