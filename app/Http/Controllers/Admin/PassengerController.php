<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PassengerRequest;
use App\Models\{Country, Passenger};

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

        return view('admin.passenger.index', [
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

        return view('admin.passenger.create', [
            'countries' => $countries,
            'responsibles' => $responsibles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PassengerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PassengerRequest $request)
    {
        DB::beginTransaction();

        $input = $request->all();

        $created = Passenger::create($input);

        if ($created) {
            DB::commit();
            sessionFlash('success', 'Companhia aérea cadastrada com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao cadastrar a companhia aérea!');
        }

        return redirect(route('admin.passenger.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $passenger = Passenger::findOrFail($id);

        return view('admin.passenger.show', [
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
        $passenger = Passenger::findOrFail($id);
        $countries = Country::select(['cd_pais', 'nm_pais'])->get();
        $responsibles = Passenger::select(['cd_psgr', 'nm_psgr'])->get();

        return view('admin.passenger.edit', [
            'passenger' => $passenger,
            'countries' => $countries,
            'responsibles' => $responsibles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PassengerRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PassengerRequest $request, $id)
    {
        DB::beginTransaction();

        $input = $request->all();
        $passenger = Passenger::findOrFail($id);
        $updated = $passenger->update($input);

        if ($updated) {
            DB::commit();
            sessionFlash('success', 'Companhia aérea atualizada com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao atualizar a companhia aérea!');
        }

        return redirect(route('admin.passenger.index'));
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
            $passenger = Passenger::findOrFail($id);
            $deleted = $passenger->delete();

            if ($deleted) {
                return response()->json([
                    'success' => true,
                    'message' => 'Passageiro deletado com sucesso!'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Ocorreu uma falha ao deletar o passageiro!'
                ]);
            }
        } catch (\Throwable $th) {
            if ($th->getCode() === '23000') {
                return response()->json([
                    'success' => false,
                    'message' => 'Impossível deletar este passageiro, pois ele está relacionada a outras entidades!'
                ]);
            }
        }
    }
}
