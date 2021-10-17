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
    Route::resource('/companhias-aereas', 'AirlineController')->names('airline')->parameters(['companhias_aerea' => 'airline']);
    Route::resource('/aeroportos', 'AirportController')->names('airport')->parameters(['aeroporto' => 'airport']);


    Route::get('/reservas', 'BookingController@index')->name('booking.index');
    Route::get('/reservas/cadastrar', 'BookingController@create')->name('booking.create');
    Route::post('/reservas', 'BookingController@store')->name('booking.store');
    Route::get('/reservas/{cd_psgr}/{nr_voo}/{dt_saida_voo}', 'BookingController@show')->name('booking.show');
    Route::get('/reservas/{cd_psgr}/{nr_voo}/{dt_saida_voo}/editar', 'BookingController@edit')->name('booking.edit');
    Route::put('/reservas/{cd_psgr}/{nr_voo}/{dt_saida_voo}', 'BookingController@update')->name('booking.update');
    Route::delete('/reservas/{cd_psgr}/{nr_voo}/{dt_saida_voo}', 'BookingController@destroy')->name('booking.destroy');


    Route::get('/voos', 'FlightController@index')->name('flight.index');
    Route::get('/voos/cadastrar', 'FlightController@create')->name('flight.create');
    Route::post('/voos', 'FlightController@store')->name('flight.store');
    Route::get('/voos/{nr_voo}/{dt_saida_voo}', 'FlightController@show')->name('flight.show');
    Route::get('/voos/{nr_voo}/{dt_saida_voo}/editar', 'FlightController@edit')->name('flight.edit');
    Route::put('/voos/{nr_voo}/{dt_saida_voo}', 'FlightController@update')->name('flight.update');
    Route::delete('/voos/{nr_voo}/{dt_saida_voo}', 'FlightController@destroy')->name('flight.destroy');


    Route::resource('/paises', 'CountryController')->names('country')->parameters(['pais' => 'country']);
    Route::resource('/equipamentos', 'EquipmentController')->names('equipment')->parameters(['equipamento' => 'equipment']);
    // Route::resource('/voos', 'FlightController')->names('flight')->parameters(['voo' => 'flight']);
    Route::resource('/passageiros', 'PassengerController')->names('passenger')->parameters(['passageiro' => 'passenger']);
    Route::resource('/rotas', 'RouteController')->names('route')->parameters(['rota' => 'route']);
    Route::resource('/unidades-federais', 'StateController')->names('state')->parameters(['uf' => 'uf']);
});


// Route::get('/seed', function () {
//     $group = State::all();

//     foreach ($group as $item) {
//         echo 'State::create([<br/>';
//         foreach ($item->getAttributes() as $attribute => $value) {
//             if ((gettype($item[$attribute]) === 'string') || (gettype($item[$attribute]) === 'object'))
//                 echo "&nbsp;&nbsp;&nbsp;&nbsp;'{$attribute}' => '{$value}',<br/>";
//             elseif ($value == null)
//                 echo "&nbsp;&nbsp;&nbsp;&nbsp;'{$attribute}' => null,<br/>";
//             else
//                 echo "&nbsp;&nbsp;&nbsp;&nbsp;'{$attribute}' => {$value},<br/>";
//         }
//         echo "]);<br/><br/>";
//     }
// });
