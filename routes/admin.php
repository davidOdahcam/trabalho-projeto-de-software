<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Admin'], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/aeronaves', 'AircraftController')->except(['show', 'destroy'])->names('admin.aircraft')->parameters(['aeronave' => 'aircraft']);
    Route::resource('/companhias-aereas', 'AirlineController')->except(['show', 'destroy'])->names('admin.airline')->parameters(['companhias_aerea' => 'airline']);
    Route::resource('/aeroportos', 'AirportController')->except(['show', 'destroy'])->names('admin.airport')->parameters(['aeroporto' => 'airport']);


    Route::get('/reservas', 'BookingController@index')->name('admin.booking.index');
    Route::get('/reservas/cadastrar', 'BookingController@create')->name('admin.booking.create');
    Route::post('/reservas', 'BookingController@store')->name('admin.booking.store');
    Route::get('/reservas/{cd_psgr}/{nr_voo}/{dt_saida_voo}', 'BookingController@show')->name('admin.booking.show');
    Route::get('/reservas/{cd_psgr}/{nr_voo}/{dt_saida_voo}/editar', 'BookingController@edit')->name('admin.booking.edit');
    Route::put('/reservas/{cd_psgr}/{nr_voo}/{dt_saida_voo}', 'BookingController@update')->name('admin.booking.update');
    Route::delete('/reservas/{cd_psgr}/{nr_voo}/{dt_saida_voo}', 'BookingController@destroy')->name('admin.booking.destroy');


    Route::get('/voos', 'FlightController@index')->name('admin.flight.index');
    Route::get('/voos/cadastrar', 'FlightController@create')->name('admin.flight.create');
    Route::post('/voos', 'FlightController@store')->name('admin.flight.store');
    Route::get('/voos/{nr_voo}/{dt_saida_voo}', 'FlightController@show')->name('admin.flight.show');
    Route::get('/voos/{nr_voo}/{dt_saida_voo}/editar', 'FlightController@edit')->name('admin.flight.edit');
    Route::put('/voos/{nr_voo}/{dt_saida_voo}', 'FlightController@update')->name('admin.flight.update');
    Route::delete('/voos/{nr_voo}/{dt_saida_voo}', 'FlightController@destroy')->name('admin.flight.destroy');


    Route::resource('/paises', 'CountryController')->except(['show', 'destroy'])->names('admin.country')->parameters(['pais' => 'country']);
    Route::resource('/equipamentos', 'EquipmentController')->except(['show', 'destroy'])->names('admin.equipment')->parameters(['equipamento' => 'equipment']);
    Route::resource('/passageiros', 'PassengerController')->except(['show', 'destroy'])->names('admin.passenger')->parameters(['passageiro' => 'passenger']);
    Route::resource('/rotas-de-voo', 'RouteController')->except(['show', 'destroy'])->names('admin.route')->parameters(['rota' => 'route']);
    Route::resource('/unidades-federais', 'StateController')->except(['show', 'destroy'])->names('admin.state')->parameters(['uf' => 'uf']);

    Route::group(['prefix' => '/relatorios'], function() {
        Route::get('/companhias-por-paises', 'ReportController@airlineByCountry')->name('admin.report.airline_by_country');
        Route::get('/reservas-de-passageiros', 'ReportController@bookingsPassengers300')->name('admin.report.bookings_passengers_300');
        Route::get('/capacidade-por-equipamento', 'ReportController@notJet')->name('admin.report.not_jet');
        Route::get('/equipamentos', 'ReportController@equipments')->name('admin.report.equipments');
        Route::get('/passageiros', 'ReportController@passengers')->name('admin.report.passengers');
        Route::get('/voos-por-cidade', 'ReportController@flightsCity')->name('admin.report.flights_city');
        Route::get('/capacidade-de-transporte', 'ReportController@carryingCapacity')->name('admin.report.carrying_capacity');
        Route::get('/media-de-idade', 'ReportController@averageAge')->name('admin.report.average_age');
        Route::get('/voos-por-rota', 'ReportController@flightsByRoute')->name('admin.report.flights_by_route');
    });
});
