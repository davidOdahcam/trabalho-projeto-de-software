<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StateRequest;
use App\Models\State;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::orderBy('nm_uf', 'ASC')->paginate(config('general.datatable.per_page'));

        return view('admin.state.index', [
            'states' => $states
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.state.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StateRequest $request)
    {
        DB::beginTransaction();

        $input = $request->all();

        $created = State::create($input);

        if ($created) {
            DB::commit();
            sessionFlash('success', 'Aeroporto cadastrado com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao cadastrar o aeroporto!');
        }

        return redirect(route('admin.state.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $state = State::findOrFail($id);

        return view('admin.state.edit', [
            'state' => $state
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StateRequest $request, $id)
    {
        DB::beginTransaction();

        $input = $request->all();
        $state = State::findOrFail($id);
        $updated = $state->update($input);

        if ($updated) {
            DB::commit();
            sessionFlash('success', 'Aeroporto atualizado com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao atualizar o aeroporto!');
        }

        return redirect(route('admin.state.index'));
    }
}
