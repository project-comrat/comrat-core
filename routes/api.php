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
Route::post('train',['as' => 'train.create', 'uses' => 'Api\AdminController@create_train']);
Route::get('train',['as' => 'train.get_all', 'uses' => 'Api\AdminController@get_trains']);
Route::get('train/{id}',['as' => 'train.get', 'uses' => 'Api\AdminController@get_train']);
Route::delete('train/{id}',['as' => 'train.delete', 'uses' => 'Api\AdminController@delete_train']);

/*
|--------------------------------------------------------------------------
| Station Routes
|--------------------------------------------------------------------------
*/
Route::post('station', 'Api\AdminController@create_station');
Route::get('station',['as' => 'station.get_all', 'uses' => 'Api\AdminController@get_stations']);
Route::get('station/{id}',['as' => 'station.get', 'uses' => 'Api\AdminController@get_station']);
Route::delete('station/{id}',['as' => 'station.delete', 'uses' => 'Api\AdminController@delete_station']);

/*
|--------------------------------------------------------------------------
| Record Routes
|--------------------------------------------------------------------------
*/
Route::post('record', 'Api\AdminController@create_record');
Route::get('record',['as' => 'record.get_all', 'uses' => 'Api\AdminController@get_records']);
Route::get('record/{id}',['as' => 'record.get', 'uses' => 'Api\AdminController@get_record']);
Route::delete('record/{id}',['as' => 'record.delete', 'uses' => 'Api\AdminController@delete_record']);
