<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airports = Airport::paginate(config('assets.datatable.per_page'));

        return view('airport.index', [
            'airports' => $airports
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
        $states = State::all();

        return view('airport.create', [
            'countries' => $countries,
            'states' => $states
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

        $created = Airport::create($input);

        if ($created) {
            DB::commit();
            Session::flash('success', 'Aeroporto cadastrado com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao cadastrar o aeroporto!');
        }

        return Redirect::route('airport.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $airport = Airport::find($id);

        return view('airport.show', [
            'airport' => $airport
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
        $airport = Airport::find($id);
        $countries = Country::select(['cd_pais', 'nm_pais'])->get();
        $states = State::all();

        return view('airport.edit', [
            'airport' => $airport,
            'countries' => $countries,
            'states' => $states
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
        $airport = Airport::find($id);
        $updated = $airport->update($input);

        if ($updated) {
            DB::commit();
            Session::flash('success', 'Aeroporto atualizado com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao atualizar o aeroporto!');
        }

        return Redirect::route('airport.index');
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

        // $airport = Airport::find($id);
        // $deleted = $airport->delete();

        // if ($deleted) {
        //     DB::commit();
        //     Session::flash('success', 'Aeronave deletada com sucesso!');
        // } else {
        //     DB::rollBack();
        //     Session::flash('error', 'Erro ao deletar a aeronave!');
        // }

        // return Redirect::route('airport.index');

        $airport = Airport::find($id);
        $deleted = $airport->delete();

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
    }
}
