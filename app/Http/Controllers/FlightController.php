<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightRequest;
use App\Models\Aircraft;
use App\Models\Flight;
use App\Models\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::orderBy('dt_saida_voo', 'DESC')->paginate(config('general.datatable.per_page'))->onEachSide(0);

        return view('flight.index', [
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

        return view('flight.create', [
            'aircrafts' => $aircrafts,
            'routes' => $routes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlightRequest $request)
    {
        DB::beginTransaction();

        $input = $request->all();

        $created = Flight::create($input);

        if ($created) {
            DB::commit();
            Session::flash('success', 'Aeroporto cadastrado com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao cadastrar o aeroporto!');
        }

        return Redirect::route('flight.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nr_voo, $dt_saida_voo)
    {
        $flight = Flight::where(['nr_voo' => $nr_voo, 'dt_saida_voo' => $dt_saida_voo])->first();

        return view('flight.show', [
            'flight' => $flight
        ]);
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

        return view('flight.edit', [
            'flight' => $flight,
            'aircrafts' => $aircrafts,
            'routes' => $routes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
            Session::flash('success', 'Aeroporto atualizado com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao atualizar o aeroporto!');
        }

        return Redirect::route('flight.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nr_voo, $dt_saida_voo)
    {
        try {
            $flight = Flight::where(['nr_voo' => $nr_voo, 'dt_saida_voo' => $dt_saida_voo])->first();
            $deleted = $flight->delete();

            if ($deleted) {
                return response()->json([
                    'success' => true,
                    'message' => 'Aeroporto deletado com sucesso!'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Ocorreu uma falha ao deletar  aeroporto!'
                ]);
            }
        } catch (\Throwable $th) {
            if ($th->getCode() === '23000') {
                return response()->json([
                    'success' => false,
                    'message' => 'Impossível deletar este voo, pois ele está relacionado a outras entidades!'
                ]);
            }
        }
    }
}
