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


Auth::routes(['register' => false]);

Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/aeronaves', 'AircroftController')->names('aircroft')->parameters(['aeronave' => 'aircroft']);
    Route::resource('/companhias-aereas', 'AirlineController')->names('airline')->parameters(['companhia' => 'airline']);
    Route::resource('/aeroportos', 'AirportController')->names('airport')->parameters(['aeroporto' => 'airport']);
    Route::resource('/reservas', 'BookingController')->names('booking')->parameters(['reserva' => 'booking']);
    Route::resource('/paises', 'CountryController')->names('country')->parameters(['pais' => 'country']);
    Route::resource('/equipamentos', 'EquipmentController')->names('equipment')->parameters(['equipamento' => 'equipment']);
    Route::resource('/voos', 'FlightController')->names('flight')->parameters(['voo' => 'flight']);
    Route::resource('/passageiros', 'PassengerController')->names('passenger')->parameters(['passageiro' => 'passenger']);
    Route::resource('/rotas', 'RouteController')->names('route')->parameters(['rota' => 'route']);
    Route::resource('/unidades-federais', 'StateController')->names('state')->parameters(['uf' => 'uf']);
});
