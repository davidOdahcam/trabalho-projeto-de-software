<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Passenger;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passengers = Passenger::orderBy('nm_psgr', 'ASC')->paginate(config('general.datatable.per_page'));

        return view('passenger.index', [
            'passengers' => $passengers
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
        $responsibles = Passenger::select(['cd_psgr', 'nm_psgr'])->get();

        return view('passenger.create', [
            'countries' => $countries,
            'responsibles' => $responsibles
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

        $created = Passenger::create($input);

        if ($created) {
            DB::commit();
            Session::flash('success', 'Companhia aérea cadastrada com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao cadastrar a companhia aérea!');
        }

        return Redirect::route('passenger.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $passenger = Passenger::find($id);

        return view('passenger.show', [
            'passenger' => $passenger
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
        $passenger = Passenger::find($id);
        $countries = Country::select(['cd_pais', 'nm_pais'])->get();
        $responsibles = Passenger::select(['cd_psgr', 'nm_psgr'])->get();

        return view('passenger.edit', [
            'passenger' => $passenger,
            'countries' => $countries,
            'responsibles' => $responsibles
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
        $passenger = Passenger::find($id);
        $updated = $passenger->update($input);

        if ($updated) {
            DB::commit();
            Session::flash('success', 'Companhia aérea atualizada com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao atualizar a companhia aérea!');
        }

        return Redirect::route('passenger.index');
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

        // $passenger = Passenger::find($id);
        // $deleted = $passenger->delete();

        // if ($deleted) {
        //     DB::commit();
        //     Session::flash('success', 'Aeronave deletada com sucesso!');
        // } else {
        //     DB::rollBack();
        //     Session::flash('error', 'Erro ao deletar a aeronave!');
        // }

        // return Redirect::route('passenger.index');

        $passenger = Passenger::find($id);
        $deleted = $passenger->delete();

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
