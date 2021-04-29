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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('matches', 'MatchController@index')->name('match.index');
Route::get('matches/create', 'MatchController@create')->name('match.create');
Route::post('matches/store', 'MatchController@store')->name('match.store');
Route::get('matches/edit/{id}', 'MatchController@edit')->name('match.edit');
Route::patch('matches/update/{id}', 'MatchController@update')->name('match.update');
Route::get('matches/delete/{id}', 'MatchController@delete')->name('match.delete');

