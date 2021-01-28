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
})->name('inicio');


Route::get('/ftp', 'ProductosController@ftp')->name('ftp');
Route::get('/ftpCo', 'ProductosController@ftpCo')->name('ftpCo');
Route::get('/excel', 'ProductosController@excel')->name('excel');
Route::get('/ctExport', 'ProductosController@ctExport')->name('ctExport');


