<?php

namespace App\Http\Controllers;

use App\Models\Aircroft;
use App\Models\Airline;
use App\Models\Equipment;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class AircroftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aircrofts = Aircroft::paginate(config('general.datatable.per_page'));

        return view('aircroft.index', [
            'aircrofts' => $aircrofts
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

        return view('aircroft.create', [
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
    public function store(Request $request)
    {
        DB::beginTransaction();

        $input = $request->all();

        $created = Aircroft::create($input);

        if ($created) {
            DB::commit();
            Session::flash('success', 'Aeronave cadastrada com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao cadastrar a aeronave!');
        }

        return Redirect::route('aircroft.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aircroft = Aircroft::find($id);

        return view('aircroft.show', [
            'aircroft' => $aircroft
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
        $aircroft = Aircroft::find($id);

        return view('aircroft.edit', [
            'aircroft' => $aircroft,
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
    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        $input = $request->all();
        $aircroft = Aircroft::find($id);
        $updated = $aircroft->update($input);

        if ($updated) {
            DB::commit();
            Session::flash('success', 'Aeronave atualizada com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao atualizar a aeronave!');
        }

        return Redirect::route('aircroft.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::beginTransaction();

        // $aircroft = Aircroft::find($id);
        // $deleted = $aircroft->delete();

        // if ($deleted) {
        //     DB::commit();
        //     Session::flash('success', 'Aeronave deletada com sucesso!');
        // } else {
        //     DB::rollBack();
        //     Session::flash('error', 'Erro ao deletar a aeronave!');
        // }

        // return Redirect::route('aircroft.index');

        $aircroft = Aircroft::find($id);
        $deleted = $aircroft->delete();

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
    }
}
