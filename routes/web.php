<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Grave;
use Illuminate\Http\Request;
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
Route::get('/lotspage', function () {
    return view('lotspage');
});
Route::get('/mapspage', function () {
    return view('mapspage');
});
Route::get('/contactuspage', function () {
    return view('contactuspage');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/graves/{grave}/position', function(Grave $grave, Request $request) {
    $grave->update([
        'position' => $request->input('position')
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/deceased', 'HomeController@deceased')->name('deceased');

Route::group(['middleware' => ['auth']], function() {
    Route::get('change-password','ChangePasswordController@index')->name('settings');
    Route::post('change-password','ChangePasswordController@store')->name('change.password');
    Route::get('/deceaseds', 'DeceasedController@index')->name('deceaseds.index');
    Route::get('/deceaseds/{person}', 'DeceasedController@show')->name('deceaseds.show');
    Route::resource('lots','LotController');
    Route::resource('sectors','SectorController');
    Route::get('/persons', 'PersonController@index')->name('persons.index');
    Route::get('/persons/{person}/edit', 'PersonController@edit')->name('persons.edit');
    Route::get('/graves/{grave}/person/create', 'PersonController@create')->name('persons.create');
    Route::post('/graves/{grave}/person/store', 'PersonController@store')->name('persons.store');
    Route::put('/persons/{person}', 'PersonController@update')->name('persons.update');
    Route::get('/persons/{person}/{grave_number}', 'PersonController@show')->name('persons.show');
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('sectors.graves', 'GraveController')->shallow();
    Route::get('/sector/{sector}/graves', 'GraveController@showSectorGraves')->name('sectors.graves');

    Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});
