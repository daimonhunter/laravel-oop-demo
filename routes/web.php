<?php

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
//Route::get('foo', 'OrderController@anyCreateOrder');
//Route::get('detail', 'ProductController@anyDetail');

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    $api->any('foo', 'App\Http\Controllers\OrderController@anyCreateOrder');
    $api->any('detail', 'App\Http\Controllers\ProductController@anyDetail');
});
$api->version('v2', function ($api) {
    $api->get('foo', 'App\Http\Controllers\V2\OrderController@anyCreateOrder');
    $api->any('detail', 'App\Http\Controllers\ProductController@anyDetail');
});
