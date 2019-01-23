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

Route::group(['middleware' => 'auth'], function () {

   // Maersk ------------------------------------------------------------------------

   Route::get('MaerksCitySelect/{id}','ExtractDataMaersk@MaerksCitySelect')->name('Maerks.City.Select');
   Route::get('MaerksForCites','ExtractDataMaersk@MaerksForCites')->name('Maerks.For.Cites');
   Route::get('CitiesMaerks/','ExtractDataMaersk@index')->name('Cities.Maerks');
   Route::get('LoadPort/{selector}/{id}','ExtractDataMaersk@LoadPort')->name('LoadPort');
   Route::get('RoutesExistChunk','ExtractDataMaersk@RoutesExistChunk')->name('Routes.Exist.Chunk');
   Route::post('MaerksNewRoutes/','ExtractDataMaersk@MaerksNewRoutes')->name('Maerks.New.Routes');
   Route::get('/test','ExtractDataMaersk@test')->name('test');
   Route::get('/listCityMaersk','ExtractDataMaersk@cities')->name('list.cities.maersk');
   Route::get('/EditCityMaersk/{id}','ExtractDataMaersk@EditCity')->name('Edit.City.Maersk');
   Route::put('updateMaersk/{id}','ExtractDataMaersk@update')->name('update.maersk');
   Route::get('/deleteMaersk/{id}','ExtractDataMaersk@delete')->name('delete.maersk');
   Route::get('ForceApiNotificationMaersk','ExtractDataMaersk@forceApiNotification')->name('force.Api.Notification.maersk');

   //------------------

   Route::get('LoadForReferens','ExtractDataMaersk@LoadForReferens')->name('Load.For.Referens');

   // Msc ---------------------------------------------------------------------------

   Route::get('ExtractContriesMsc','ExtractDataMscController@ExtracContriesMsc')->name('Extract.Contries.Msc');

   // Cosco --------------------------------------------------------------------------

   Route::get('CitiesCoscotest','ExtractCoscoController@ExtractCities')->name('Cities.Cosco');

   Route::get('CitiesCosco','ExtractCoscoController@index')->name('Cities.Cosco');
   Route::get('LoadPortCosco/{selector}/{id}','ExtractCoscoController@LoadPortCosco')->name('loadportcosco');
   Route::get('RutasForCityCosco/{id}','ExtractCoscoController@ExtractRoutesForCity')->name('Rutas.For.City.Cosco');
   Route::get('CountryCosco','ExtractCoscoController@ExtractContries')->name('Country.Cosco');
   Route::get('UpdateRoutesCosco','ExtractCoscoController@UpdateRoutes')->name('Update.Routes.Cosco');
   Route::get('PortsForCityCosco','ExtractCoscoController@Cities')->name('Ports.For.City.Cosco');
   Route::post('CoscoNewRoutes/','ExtractCoscoController@CoscoNewRoutes')->name('Cosco.New.Routes');
   Route::get('/listCityCosco','ExtractCoscoController@citieslist')->name('list.cities.cosco');
   Route::get('EditCityCosco/{id}','ExtractCoscoController@EditCity')->name('Edit.City.cosco');
   Route::put('updateCosco/{id}','ExtractCoscoController@update')->name('update.cosco');
   Route::get('deleteCosco/{id}','ExtractCoscoController@delete')->name('delete.cosco');
   Route::get('tesCosco/','ExtractCoscoController@test')->name('test.cosco');
   Route::get('ForceApiNotificationCosco/','ExtractCoscoController@forceApiNotification')->name('force.Api.Notification.cosco');
   Route::get('tesML/','MaritimeLineController@test')->name('test.ML');

   // Geonode  -----------------------------------------------------------------------

   Route::get('GeoCities','GeonodeCitiesController@ExtractGeoCities')->name('Geo.Cities');
   Route::get('/home', 'HomeController@index')->name('home');

   // Credentials Api ----------------------------------------------------------------
   Route::group(['prefix'=>'Credential'],function(){
      Route::get('/passwordGTDelete/{id}','CredentialApiController@eliminar')->name('password.delete');
      Route::resource('Credential','CredentialApiController');
   });


});

Route::get('create-passport-client', function () {
    \Artisan::call('passport:client', 
        ['--password' => 1, '--name' => 'Password Grant Tokens' ]
    );
    return redirect()->route('Credential.create');
})->middleware(['auth'])->name('create.passport.client');

Auth::routes();
