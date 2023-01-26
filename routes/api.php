<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\PeopleController;

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

Route::get('/burdzinski/305350/people_app',[PeopleController::class,'index']);
Route::get('/burdzinski/305350/people_app/{people_app}',[PeopleController::class,'show']);
Route::post('/burdzinski/305350/people_app', [PeopleController::class, 'store']);
Route::put('/burdzinski/305350/people_app/{people_app}', [PeopleController::class, 'update']);
Route::delete('/burdzinski/305350/people_app/{people_app}', [PeopleController::class, 'delete']);