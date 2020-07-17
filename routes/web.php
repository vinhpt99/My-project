<?php

use App\Http\Controllers\AdminControler;
use App\Http\Controllers\HomeControler;
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
//Frontend
Route::get('/', 'HomeControler@index'); 
Route::get('/trangchu', 'HomeControler@index' );
//Backend
Route::get('/admin', 'AdminControler@index');
Route::get('/dashboard','AdminControler@show_dashboard');
Route::get('/logout','AdminControler@logout');
Route::post('/admin-dashboard', 'AdminControler@dashboard'); 