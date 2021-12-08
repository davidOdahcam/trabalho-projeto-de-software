<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FlightRequest;
use App\Models\{Aircraft, Flight, Route};

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::orderBy('dt_saida_voo', 'DESC')->paginate(config('general.datatable.per_page'));

        return view('admin.flight.index', [
            'flights' => $flights
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aircrafts = Aircraft::all();
        $routes = Route::all();

        return view('admin.flight.create', [
            'aircrafts' => $aircrafts,
            'routes' => $routes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\FlightRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlightRequest $request)
    {
        DB::beginTransaction();

        $input = $request->all();

        $created = Flight::create($input);

        if ($created) {
            DB::commit();
            sessionFlash('success', 'Voo cadastrado com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao cadastrar o voo!');
        }

        return redirect(route('admin.flight.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nr_voo, $dt_saida_voo)
    {
        $flight = Flight::where(['nr_voo' => $nr_voo, 'dt_saida_voo' => $dt_saida_voo])->first();
        $aircrafts = Aircraft::all();
        $routes = Route::all();

        return view('admin.flight.edit', [
            'flight' => $flight,
            'aircrafts' => $aircrafts,
            'routes' => $routes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\FlightRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FlightRequest $request, $nr_voo, $dt_saida_voo)
    {
        DB::beginTransaction();

        $input = $request->only(['nr_voo', 'dt_saida_voo', 'nr_rota_voo', 'cd_arnv']);
        $flight = Flight::where(['nr_voo' => $nr_voo, 'dt_saida_voo' => $dt_saida_voo])->first();
        $updated = $flight->update($input);

        if ($updated) {
            DB::commit();
            sessionFlash('success', 'Voo atualizado com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao atualizar o voo!');
        }

        return redirect(route('admin.flight.index'));
    }
}
