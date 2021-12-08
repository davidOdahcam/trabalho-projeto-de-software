<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EquipmentRequest;
use App\Models\Equipment;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipments = Equipment::orderBy('nm_eqpt', 'ASC')->paginate(config('general.datatable.per_page'));

        return view('admin.equipment.index', [
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
        return view('admin.equipment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\EquipmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipmentRequest $request)
    {
        DB::beginTransaction();

        $input = $request->all();

        $created = Equipment::create($input);

        if ($created) {
            DB::commit();
            sessionFlash('success', 'Equipamento cadastrado com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao cadastrar o equipamento!');
        }

        return redirect(route('admin.equipment.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipment = Equipment::findOrFail($id);

        return view('admin.equipment.edit', [
            'equipment' => $equipment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\EquipmentRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EquipmentRequest $request, $id)
    {
        DB::beginTransaction();

        $input = $request->all();
        $equipment = Equipment::findOrFail($id);
        $updated = $equipment->update($input);

        if ($updated) {
            DB::commit();
            sessionFlash('success', 'Equipamento atualizado com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao atualizar o equipamento!');
        }

        return redirect(route('admin.equipment.index'));
    }
}
