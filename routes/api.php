<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers\Api'], function() {
    Route::group(['prefix' => '/aeronaves'], function() {
        Route::delete('/{cd_arnv}/deletar', 'AircraftController@destroy')->name('api.aircraft.destroy');
    });

    Route::group(['prefix' => '/companhias-aereas'], function() {
        Route::delete('/{cd_cmpn_aerea}/deletar', 'AirlineController@destroy')->name('api.airline.destroy');
    });

    Route::group(['prefix' => '/aeroportos'], function() {
        Route::delete('/{cd_arpt}/deletar', 'AirportController@destroy')->name('api.airport.destroy');
    });

    Route::group(['prefix' => '/reservas'], function() {
        Route::delete('/{cd_psgr}/{nr_voo}/{dt_saida_voo}/deletar', 'BookingController@destroy')->name('api.booking.destroy');
    });

    Route::group(['prefix' => '/voos'], function() {
        Route::delete('/{nr_voo}/{dt_saida_voo}/deletar', 'FlightController@destroy')->name('api.flight.destroy');
    });

    Route::group(['prefix' => '/paises'], function() {
        Route::delete('/{cd_pais}/deletar', 'CountryController@destroy')->name('api.country.destroy');
    });

    Route::group(['prefix' => '/equipamentos'], function() {
        Route::delete('/{cd_eqpt}/deletar', 'EquipmentController@destroy')->name('api.equipment.destroy');
    });

    Route::group(['prefix' => '/passageiros'], function() {
        Route::delete('/{cd_psgr}/deletar', 'PassengerController@destroy')->name('api.passenger.destroy');
    });

    Route::group(['prefix' => '/rotas-de-voo'], function() {
        Route::delete('/{nr_rota_voo}/deletar', 'RouteController@destroy')->name('api.route.destroy');
    });

    Route::group(['prefix' => '/unidades-federais'], function() {
        Route::delete('/{sg_uf}/deletar', 'StateController@destroy')->name('api.state.destroy');
    });
});
