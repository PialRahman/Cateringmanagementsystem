<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

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

Route::get('/', 'App\Http\Controllers\ServiceController@index')->name('index');
Route::post('/save', 'App\Http\Controllers\ServiceController@save')->name('save');
Route::post('/dashboardviews', 'App\Http\Controllers\ServiceController@dashboardviews')->name('dashboardviews');
Route::get('/vieworderedfooditems', 'App\Http\Controllers\ServiceController@vieworderedfooditems')->name('vieworderedfooditems');
Route::post('/fooditemsstore', 'App\Http\Controllers\ServiceController@fooditemsstore')->name('fooditemsstore');

Route::get('/addfooditems', 'App\Http\Controllers\ServiceController@addfooditems')->name('addfooditems');
Route::get('/fooditemsdetails/{id}', 'App\Http\Controllers\ServiceController@fooditemsdetails')->name('fooditemsdetails');
Route::get('/viewfoodmenuitems', 'App\Http\Controllers\ServiceController@viewfoodmenuitems')->name('viewfoodmenuitems');
Route::post('/addfoodmenuitems', 'App\Http\Controllers\ServiceController@addfoodmenuitems')->name('addfoodmenuitems');

Route::get('/search', 'App\Http\Controllers\ServiceController@search')->name('search');
Route::get('/login', 'App\Http\Controllers\ServiceController@login')->name('login');
Route::get('/register', 'App\Http\Controllers\ServiceController@register')->name('register');

Route::get('dashboardviews/userdashboardview', 'App\Http\Controllers\ServiceController@userdashboardview')->name('userdashboardview');
Route::get('dashboardviews/admindashboardview', 'App\Http\Controllers\ServiceController@admindashboardview')->name('admindashboardview');

