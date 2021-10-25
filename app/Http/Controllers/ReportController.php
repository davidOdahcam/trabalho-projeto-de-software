<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Equipment;
use App\Models\Flight;
use App\Models\Passenger;
use Illuminate\Support\Facades\DB;

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


    public function notJet()
    {
        $equipments = Equipment::where('qt_psgr', '<=', 100)->where('dc_tipo_eqpt', '!=', 'JATO')->orderBy('nm_eqpt', 'ASC')->get();

        return view('report.not_jet', [
            'equipments' => $equipments
        ]);
    }


    public function equipments()
    {
        $equipments = Equipment::all();

        return view('report.equipments', [
            'equipments' => $equipments
        ]);
    }


    public function passengers()
    {
        $passengers = Passenger::orderBy('nm_psgr', 'ASC')->get();

        return view('report.passengers', [
            'passengers' => $passengers
        ]);
    }


    public function flightsCity()
    {
        $flights = DB::table('itr_voo')
                     ->selectRaw('`itr_arpt`.`nm_cidd`, COUNT(`itr_voo`.`nr_voo`) AS `quantity`')
                     ->join('itr_rota_voo', 'itr_voo.nr_rota_voo', '=', 'itr_rota_voo.nr_rota_voo')
                     ->join('itr_arpt', 'itr_rota_voo.cd_arpt_orig', '=', 'itr_arpt.cd_arpt')
                    //  ->where('itr_arpt.nm_cidd', 'Rio de Janeiro')
                     ->groupBy('itr_arpt.nm_cidd')
                     ->get();

        return view('report.flights_city', [
            'flights' => $flights
        ]);
    }
}
