<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AirlineRequest;
use App\Models\{Airline, Country};

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airlines = Airline::orderBy('nm_cmpn_aerea', 'ASC')->paginate(config('general.datatable.per_page'));

        return view('admin.airline.index', [
            'airlines' => $airlines
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::select(['cd_pais', 'nm_pais'])->get();

        return view('admin.airline.create', [
            'countries' => $countries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AirlineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AirlineRequest $request)
    {
        DB::beginTransaction();

        $input = $request->all();

        $created = Airline::create($input);

        if ($created) {
            DB::commit();
            sessionFlash('success', 'Companhia aérea cadastrada com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao cadastrar a companhia aérea!');
        }

        return redirect(route('admin.airline.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $airline = Airline::findOrFail($id);
        $countries = Country::select(['cd_pais', 'nm_pais'])->get();

        return view('admin.airline.edit', [
            'airline' => $airline,
            'countries' => $countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\AirlineRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AirlineRequest $request, $id)
    {
        DB::beginTransaction();

        $input = $request->all();
        $airline = Airline::findOrFail($id);
        $updated = $airline->update($input);

        if ($updated) {
            DB::commit();
            sessionFlash('success', 'Companhia aérea atualizada com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao atualizar a companhia aérea!');
        }

        return redirect(route('admin.airline.index'));
    }
}
