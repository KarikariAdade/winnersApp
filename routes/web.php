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
Route::get('matches/{id}/edit', 'MatchController@edit')->name('match.edit');
Route::patch('matches/{id}/update', 'MatchController@update')->name('match.update');
Route::get('matches/{id}/delete', 'MatchController@delete')->name('match.delete');
Route::get('matches/{id}/show', 'MatchController@show')->name('match.show');
Route::post('matches/scores/store', 'MatchController@addMatchScores')->name('match.addScore');
Route::get('matches/status/{id}', 'MatchController@changeMatchStatus')->name('match.changeStatus');

/*==================================== LEAGUE ROUTES ========================================*/

Route::get('leagues', 'LeagueController@index')->name('league.index');
Route::post('league/store', 'LeagueController@store')->name('league.store');
Route::get('league/{id}/edit', 'LeagueController@edit')->name('league.edit');
Route::patch('league/{id}/update', 'LeagueController@update')->name('league.update');
Route::get('league/{id}/delete', 'Leaguecontroller@delete')->name('league.delete');

