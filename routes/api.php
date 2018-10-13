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
Route::apiResources([
'clients' => 'API\ClientController',
'sites' => 'API\SiteController',
'tanks' => 'API\TankController'

]);

Route::apiResource('todos','TodoController');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
