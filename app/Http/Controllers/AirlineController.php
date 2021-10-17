<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Country;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airlines = Airline::paginate(config('assets.datatable.per_page'));

        return view('airline.index', [
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

        return view('airline.create', [
            'countries' => $countries
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

        $created = Airline::create($input);

        if ($created) {
            DB::commit();
            Session::flash('success', 'Companhia aérea cadastrada com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao cadastrar a companhia aérea!');
        }

        return Redirect::route('airline.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $airline = Airline::find($id);

        return view('airline.show', [
            'airline' => $airline
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
        $airline = Airline::find($id);
        $countries = Country::select(['cd_pais', 'nm_pais'])->get();

        return view('airline.edit', [
            'airline' => $airline,
            'countries' => $countries
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
        $airline = Airline::find($id);
        $updated = $airline->update($input);

        if ($updated) {
            DB::commit();
            Session::flash('success', 'Companhia aérea atualizada com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao atualizar a companhia aérea!');
        }

        return Redirect::route('airline.index');
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

        // $airline = Airline::find($id);
        // $deleted = $airline->delete();

        // if ($deleted) {
        //     DB::commit();
        //     Session::flash('success', 'Aeronave deletada com sucesso!');
        // } else {
        //     DB::rollBack();
        //     Session::flash('error', 'Erro ao deletar a aeronave!');
        // }

        // return Redirect::route('airline.index');

        $airline = Airline::find($id);
        $deleted = $airline->delete();

        if ($deleted) {
            return response()->json([
                'success' => true,
                'message' => 'Companhia aérea deletada com sucesso!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Ocorreu uma falha ao deletar a companhia aérea!'
            ]);
        }
    }
}
