<?php

use Illuminate\Http\Request;

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


/*
|--------------------------------------------------------------------------
| Train Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('trains', 'Api\TrainController', ['except' => [
    'update'
]]);

/*
|--------------------------------------------------------------------------
| Station Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('stations', 'Api\StationController', ['except' => [
    'update'
]]);
/*
|--------------------------------------------------------------------------
| Record Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('records', 'Api\RecordController', ['except' => [
    'update'
]]);