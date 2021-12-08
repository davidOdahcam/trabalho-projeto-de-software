<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AircraftRequest;
use App\Models\{Aircraft, Airline, Equipment};

class AircraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aircrafts = Aircraft::paginate(config('general.datatable.per_page'));

        return view('admin.aircraft.index', [
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

        return view('admin.aircraft.create', [
            'equipments' => $equipments,
            'airlines' => $airlines
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AircraftRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AircraftRequest $request)
    {
        DB::beginTransaction();

        $input = $request->all();

        $created = Aircraft::create($input);

        if ($created) {
            DB::commit();
            sessionFlash('success', 'Aeronave cadastrada com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao cadastrar a aeronave!');
        }

        return redirect(route('admin.aircraft.index'));
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

        return view('admin.aircraft.edit', [
            'aircraft' => $aircraft,
            'equipments' => $equipments,
            'airlines' => $airlines
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\AircraftRequest  $request
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
            sessionFlash('success', 'Aeronave atualizada com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao atualizar a aeronave!');
        }

        return redirect(route('admin.aircraft.index'));
    }
}
