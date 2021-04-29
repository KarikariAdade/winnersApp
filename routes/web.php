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

/*==================================== MATCH ROUTES ========================================*/

Route::get('matches', 'MatchController@index')->name('match.index');
Route::get('matches/create', 'MatchController@create')->name('match.create');
Route::post('matches/store', 'MatchController@store')->name('match.store');
Route::get('matches/edit/{id}', 'MatchController@edit')->name('match.edit');
Route::patch('matches/update/{id}', 'MatchController@update')->name('match.update');
Route::get('matches/delete/{id}', 'MatchController@delete')->name('match.delete');

/*==================================== LEAGUE ROUTES ========================================*/

Route::get('leagues', 'LeagueController@index')->name('league.index');
Route::post('league/store', 'LeagueController@store')->name('league.store');
Route::get('league/edit/{id}', 'LeagueController@edit')->name('league.edit');
Route::patch('league/update/{id}', 'LeagueController@update')->name('league.update');
Route::get('league/delete/{id}', 'Leaguecontroller@delete')->name('league.delete');

