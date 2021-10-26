<?php

namespace App\Http\Controllers;

use App\Http\Requests\AircraftRequest;
use App\Models\Aircraft;
use App\Models\Airline;
use App\Models\Equipment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AircraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aircrafts = Aircraft::paginate(config('general.datatable.per_page'))->onEachSide(0);

        return view('aircraft.index', [
            'aircrafts' => $aircrafts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipments = Equipment::select(['cd_eqpt', 'nm_eqpt'])->get();
        $airlines = Airline::select(['cd_cmpn_aerea', 'nm_cmpn_aerea'])->get();

        return view('aircraft.create', [
            'equipments' => $equipments,
            'airlines' => $airlines
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AircraftRequest $request)
    {
        DB::beginTransaction();

        $input = $request->all();

        $created = Aircraft::create($input);

        if ($created) {
            DB::commit();
            Session::flash('success', 'Aeronave cadastrada com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao cadastrar a aeronave!');
        }

        return Redirect::route('aircraft.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aircraft = Aircraft::findOrFail($id);

        return view('aircraft.show', [
            'aircraft' => $aircraft
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipments = Equipment::select(['cd_eqpt', 'nm_eqpt'])->get();
        $airlines = Airline::select(['cd_cmpn_aerea', 'nm_cmpn_aerea'])->get();
        $aircraft = Aircraft::findOrFail($id);

        return view('aircraft.edit', [
            'aircraft' => $aircraft,
            'equipments' => $equipments,
            'airlines' => $airlines
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AircraftRequest $request, $id)
    {
        DB::beginTransaction();

        $input = $request->all();
        $aircraft = Aircraft::findOrFail($id);
        $updated = $aircraft->update($input);

        if ($updated) {
            DB::commit();
            Session::flash('success', 'Aeronave atualizada com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao atualizar a aeronave!');
        }

        return Redirect::route('aircraft.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $aircraft = Aircraft::findOrFail($id);
            $deleted = $aircraft->delete();

            if ($deleted) {
                return response()->json([
                    'success' => true,
                    'message' => 'Aeronave deletada com sucesso!'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Ocorreu uma falha ao deletar a aeronave!'
                ]);
            }
        } catch (\Throwable $th) {
            if ($th->getCode() === '23000') {
                return response()->json([
                    'success' => false,
                    'message' => 'Impossível deletar esta aeronave, pois ela está relacionada a outras entidades!'
                ]);
            }
        }
    }
}
