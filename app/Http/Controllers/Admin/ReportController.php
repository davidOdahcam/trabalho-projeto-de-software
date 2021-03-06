<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\{Airline, Country, Equipment, Passenger, Route};
use DateTime;

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

        return view('admin.report.airline_by_country', [
            'countries' => $countries,
            'airlines' => $airlines->get(),
            'selected_countries' => $selected_countries
        ]);
    }


    public function bookingsPassengers(Request $request)
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

        return view('admin.report.bookings_passengers', [
            'passengers' => $passengers->get(),
            'start' => $start,
            'end' => $end
        ]);
    }


    public function capacityByEquipment(Request $request)
    {
        $selected_dc_tipo_eqpt = $request->selected_dc_tipo_eqpt;
        $capacity = $request->capacity;

        // $equipments = Equipment::where('qt_psgr', '<=', 100)->where('dc_tipo_eqpt', '!=', 'JATO')->orderBy('nm_eqpt', 'ASC')->get();
        $equipments = Equipment::orderBy('nm_eqpt', 'ASC');

        if ($selected_dc_tipo_eqpt)
            $equipments->whereIn('dc_tipo_eqpt', $selected_dc_tipo_eqpt);

        if ($capacity)
            $equipments->where('qt_psgr', '<=', $capacity);

        $equipments = $equipments->get();

        return view('admin.report.capacity_by_equipment', [
            'equipments' => $equipments,
            'selected_dc_tipo_eqpt' => $selected_dc_tipo_eqpt,
            'capacity' => $capacity
        ]);
    }


    public function equipments()
    {
        $equipments = Equipment::all();

        return view('admin.report.equipments', [
            'equipments' => $equipments
        ]);
    }


    public function passengers()
    {
        $passengers = Passenger::orderBy('nm_psgr', 'ASC')->get();

        return view('admin.report.passengers', [
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

        return view('admin.report.flights_city', [
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

        return view('admin.report.carrying_capacity', [
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

        return view('admin.report.average_age', [
            'passengers' => $passengers,
            'average' => $average,
            'ic_sexo_psgr' => $ic_sexo_psgr,
            'ic_estd_civil' => $ic_estd_civil
        ]);
    }


    public function flightsByRoute(Request $request)
    {
        // $routes = DB::select('SELECT `itr_voo`.`nr_rota_voo` AS `route`, COUNT(*) AS `bookings` FROM `itr_rota_voo`
        //                    INNER JOIN `itr_voo` ON `itr_rota_voo`.`nr_rota_voo` = `itr_voo`.`nr_rota_voo`
        //                    INNER JOIN `itr_resv` ON `itr_resv`.`nr_voo` = `itr_voo`.`nr_voo` AND `itr_resv`.`dt_saida_voo` = `itr_voo`.`dt_saida_voo`
        //                    GROUP BY `itr_rota_voo`.`nr_rota_voo`');

        $routes = Route::all();

        return view('admin.report.flights_by_route', [
            'routes' => $routes
        ]);
    }
}
