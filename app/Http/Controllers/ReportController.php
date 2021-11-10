<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Country;
use App\Models\Equipment;
use App\Models\Flight;
use App\Models\Passenger;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function airlineByCountry(Request $request)
    {
        $selected_countries = $request->countries;

        $countries = Country::all();
        $airlines = Airline::orderBy('nm_cmpn_aerea', 'ASC');

        if ($selected_countries) {
            $airlines = Airline::whereIn('cd_pais', $selected_countries);
            if (in_array('unknown', $selected_countries)) {
                $airlines->orWhereNull('cd_pais');
            }
        }

        return view('report.airline_by_country', [
            'countries' => $countries,
            'airlines' => $airlines->get(),
            'selected_countries' => $selected_countries
        ]);
    }


    public function bookingsPassengers300(Request $request)
    {
        $start = $request->start;
        $end = $request->end;

        $passengers = Passenger::orderBy('nm_psgr', 'ASC');

        if ($start) {
            $passengers->where('cd_psgr', '>=', $start);
        }

        if ($end) {
            $passengers->where('cd_psgr', '<=', $end);
        }

        return view('report.bookings_passengers_300', [
            'passengers' => $passengers->get(),
            'start' => $start,
            'end' => $end
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


    public function flightsCity(Request $request)
    {
        $selected_cities = $request->cities;

        $cities = DB::table('itr_arpt')
                    ->select('nm_cidd')
                    ->distinct('nm_cidd')
                    ->orderBy('nm_cidd', 'ASC')
                    ->get();

        $flights = DB::table('itr_voo')
                     ->selectRaw('`itr_arpt`.`nm_cidd`, COUNT(`itr_voo`.`nr_voo`) AS `quantity`')
                     ->join('itr_rota_voo', 'itr_voo.nr_rota_voo', '=', 'itr_rota_voo.nr_rota_voo')
                     ->join('itr_arpt', 'itr_rota_voo.cd_arpt_orig', '=', 'itr_arpt.cd_arpt');

        if ($selected_cities)
            $flights->whereIn('itr_arpt.nm_cidd', $selected_cities);

        return view('report.flights_city', [
            'cities' => $cities,
            'selected_cities' => $selected_cities,
            'flights' => $flights->groupBy('itr_arpt.nm_cidd')->get()
        ]);
    }


    public function carryingCapacity(Request $request)
    {
        $selected_countries = $request->countries;

        $countries = Country::orderBy('nm_pais')->get();

        $airlines = DB::table('itr_cmpn_aerea')
                      ->selectRaw('`itr_cmpn_aerea`.`nm_cmpn_aerea`, SUM(`itr_eqpt`.`qt_psgr`) AS `total`, IF (`itr_cmpn_aerea`.`cd_pais` = "US", true, false) AS `american`')
                      ->join('itr_arnv', 'itr_cmpn_aerea.cd_cmpn_aerea', '=', 'itr_arnv.cd_cmpn_aerea')
                      ->join('itr_eqpt', 'itr_arnv.cd_eqpt', '=', 'itr_eqpt.cd_eqpt')
                      ->groupBy('itr_cmpn_aerea.nm_cmpn_aerea');

        if ($selected_countries) {
            $airlines->whereIn('itr_cmpn_aerea.cd_pais', $selected_countries);
            if (in_array('unknown', $selected_countries)) {
                $airlines->orWhereNull('itr_cmpn_aerea.cd_pais');
            }
        }

        return view('report.carrying_capacity', [
            'airlines' => $airlines->get(),
            'countries' => $countries,
            'selected_countries' => $selected_countries
        ]);
    }


    public function averageAge(Request $request)
    {
        $ic_sexo_psgr = $request->ic_sexo_psgr;
        $ic_estd_civil = $request->ic_estd_civil;

        $passengers = Passenger::orderBy('nm_psgr');

        if ($ic_sexo_psgr)
            $passengers->where('ic_sexo_psgr', $ic_sexo_psgr);

        if ($ic_estd_civil)
            $passengers->where('ic_estd_civil', $ic_estd_civil);

        $passengers = $passengers->get();

        $average = 0;
        foreach ($passengers as $passenger) {
            $birthdate = new DateTime(date(config('general.format.date'), strtotime($passenger->dt_nasc_psgr)));
            $age = $birthdate->diff(new DateTime());
            $average = $average + (int) $age->format('%y');
        }
        $average = $average / count($passengers);

        return view('report.average_age', [
            'passengers' => $passengers,
            'average' => $average,
            'ic_sexo_psgr' => $ic_sexo_psgr,
            'ic_estd_civil' => $ic_estd_civil
        ]);
    }
}
