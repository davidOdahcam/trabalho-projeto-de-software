<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipments = Equipment::paginate(config('general.datatable.per_page'));

        return view('equipment.index', [
            'equipments' => $equipments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipment.create');
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

        $created = Equipment::create($input);

        if ($created) {
            DB::commit();
            Session::flash('success', 'Equipamento cadastrado com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao cadastrar o equipamento!');
        }

        return Redirect::route('equipment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipment = Equipment::find($id);

        return view('equipment.show', [
            'equipment' => $equipment
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
        $equipment = Equipment::find($id);

        return view('equipment.edit', [
            'equipment' => $equipment
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
        $equipment = Equipment::find($id);
        $updated = $equipment->update($input);

        if ($updated) {
            DB::commit();
            Session::flash('success', 'Equipamento atualizado com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao atualizar o equipamento!');
        }

        return Redirect::route('equipment.index');
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

        // $equipment = Equipment::find($id);
        // $deleted = $equipment->delete();

        // if ($deleted) {
        //     DB::commit();
        //     Session::flash('success', 'Aeronave deletada com sucesso!');
        // } else {
        //     DB::rollBack();
        //     Session::flash('error', 'Erro ao deletar a aeronave!');
        // }

        // return Redirect::route('equipment.index');

        $equipment = Equipment::find($id);
        $deleted = $equipment->delete();

        if ($deleted) {
            return response()->json([
                'success' => true,
                'message' => 'Equipamento deletado com sucesso!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Ocorreu uma falha ao deletar o equipamento!'
            ]);
        }
    }
}
