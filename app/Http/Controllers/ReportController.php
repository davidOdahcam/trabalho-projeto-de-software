<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Equipment;
use App\Models\Flight;
use App\Models\Passenger;
use DateTime;
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


    public function aircroftsByAirline()
    {
        $airlines = DB::table('itr_cmpn_aerea')
                      ->selectRaw('`itr_cmpn_aerea`.`nm_cmpn_aerea`, SUM(`itr_eqpt`.`qt_psgr`) AS `total`, IF (`itr_cmpn_aerea`.`cd_pais` = "US", true, false) AS `american`')
                      ->join('itr_arnv', 'itr_cmpn_aerea.cd_cmpn_aerea', '=', 'itr_arnv.cd_cmpn_aerea')
                      ->join('itr_eqpt', 'itr_arnv.cd_eqpt', '=', 'itr_eqpt.cd_eqpt')
                      ->groupBy('itr_cmpn_aerea.nm_cmpn_aerea')
                      ->get();

        return view('report.aircrofts_by_airline', [
            'airlines' => $airlines
        ]);
    }


    public function biggerThanAverage()
    {
        $passengers = Passenger::where(['ic_sexo_psgr' => 'M', 'ic_estd_civil' => 'S'])->get();

        $average = 0;

        foreach ($passengers as $passenger) {
            $birthdate = new DateTime(date(config('general.format.date'), strtotime($passenger->dt_nasc_psgr)));
            $age = $birthdate->diff(new DateTime());
            $average = $average + (int) $age->format('%y');
        }

        $average = $average / count($passengers);

        foreach ($passengers as $i => $passenger) {
            $birthdate = new DateTime(date(config('general.format.date'), strtotime($passenger->dt_nasc_psgr)));
            $age = $birthdate->diff(new DateTime())->format('%y');
            if ($age < $average)
                unset($passengers[$i]);
        }

        return view('report.bigger_than_average', [
            'passengers' => $passengers,
            'average' => $average
        ]);
    }
}
