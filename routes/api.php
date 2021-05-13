<?php

use App\Http\Controllers\ApiController;
use App\Http\Resources\MatchCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\MatchResource;
use App\Match;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('matches', [ApiController::class, 'index']);

Route::get('match/{id}', [ApiController::class, 'showMatch']);
