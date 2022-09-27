<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/deceased', 'GuestController@deceased')->name('deceased');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('lots','LotController');
    Route::resource('sectors','SectorController');
    Route::get('/persons', 'PersonController@index')->name('persons.index');
    Route::get('/graves/{grave}/person/create', 'PersonController@create')->name('persons.create');
    Route::post('/graves/{grave}/person/store', 'PersonController@store')->name('persons.store');
    Route::get('/persons/{person}/show', 'PersonController@show')->name('persons.show');
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('sectors.graves', 'GraveController')->shallow();
});
