<?php

use Illuminate\Http\Request;
use App\Port;
use App\Country;

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


/*PUERTOS*/

// Lines API -----------------------------------------------------------------------

Route::get('/schedule/maersk','MaritimeLineController@SchedulesMaerks')->middleware('client');
Route::get('/schedule/cosco','MaritimeLineController@SchedulesCosco')->middleware('client');
Route::get('/schedule/maersk/{oring}/{destin}','MaritimeLineController@SOriginDestinMaerks')->middleware('client');
Route::get('/schedule/cosco/{oring}/{destin}','MaritimeLineController@SOriginDestinCosco')->middleware('client');

/*Todos los puertos*/

Route::get('ports', function() {

    return Port::all();

});

/*Detalles Puerto especifico por codigo de puerto*/


Route::get('ports/{code}', function($code) {

    return Port::where('code', $code)->first() ?? abort(404);

});

/*Puertos por pais*/
/*
Route::get('ports/country/{code}', function($code) {
});

Route::get('schedules/{origin_port}/{destination_port}', function($origin_port,$destination_port) {

});

Route::get('schedules/{maritime_line}/{origin_port}/{destination_port}', function($maritime_line,$origin_port,$destination_port) {

});

Route::get('schedules/{maritime_line}', function($maritime_line,$origin_port,$destination_port) {

});

Route::get('vessels/{name}', function($name) {

});*/

Route::get('countries', function() {
    return Country::all();
});

