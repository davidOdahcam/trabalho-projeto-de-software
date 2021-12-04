<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // DB::enableQueryLog();
        // $flight = \App\Models\Flight::first();
        // $flight->aircraft->cd_arnv;
        // $flight->aircraft->cd_eqpt;

        // dd(DB::getQueryLog());
        return view('home');
    }
}
