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
    return redirect('/home');
});

// Auth::routes();


Route::get('/home', [\App\Http\Controllers\OngkirController::class, 'index'])->name('home');
Route::get('/api/province/{id}/cities', 'OngkirController@getCities');

Route::post('/store', 'OngkirController@store')->name('store');

Route::post('/api/cities', 'OngkirController@searchCities');

//log-viewers
Route::get('log-viewers', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
