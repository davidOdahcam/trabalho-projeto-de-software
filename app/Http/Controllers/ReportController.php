<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Passenger;

class ReportController extends Controller
{
    public function foreingAirline()
    {
        $airlines = Airline::where('cd_pais', '!=', 'BR')->get();

        return view('report.foreing_airline', [
            'airlines' => $airlines
        ]);
    }


    public function bookingsPassengers300()
    {
        $passengers = Passenger::where('cd_psgr', '<', 300)->orderBy('nm_psgr', 'ASC')->get();

        return view('report.bookings_passengers_300', [
            'passengers' => $passengers
        ]);
    }


    public function unknownOrigin()
    {
        $airlines = Airline::where('cd_pais', null)->orderBy('nm_cmpn_aerea', 'ASC')->get();

        return view('report.unknown_origin', [
            'airlines' => $airlines
        ]);
    }
}
