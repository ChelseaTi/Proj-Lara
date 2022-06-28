<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyCustomUserAuth;


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
    return view('index');
});


Route::post('/validate-registration', 'App\Http\Controllers\DeviceController@Regi')->name('Register-Validation');
Route::post('/validate-user', 'App\Http\Controllers\DeviceController@Vali')->name('Login-Validation');


Route::get('/dashboard', 'App\Http\Controllers\DeviceController@home');


Route::get('/edit-record/{id}', 'App\Http\Controllers\DeviceController@editRecord');
Route::get('/add-newRecord', 'App\Http\Controllers\DeviceController@addRecord');
Route::post('/Update-record','App\Http\Controllers\DeviceController@updateRecord')->name('Update');
Route::get('/delete-record/{id}', 'App\Http\Controllers\DeviceController@deleteRecord');

