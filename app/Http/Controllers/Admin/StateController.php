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
        $states = State::orderBy('nm_uf', 'ASC')->paginate(config('general.datatable.per_page'))->onEachSide(0);

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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $state = State::findOrFail($id);

        return view('admin.state.show', [
            'state' => $state
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $state = State::findOrFail($id);
            $deleted = $state->delete();

            if ($deleted) {
                return response()->json([
                    'success' => true,
                    'message' => 'Aeroporto deletado com sucesso!'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Ocorreu uma falha ao deletar aeroporto!'
                ]);
            }
        } catch (\Throwable $th) {
            if ($th->getCode() === '23000') {
                return response()->json([
                    'success' => false,
                    'message' => 'Impossível deletar este estado, pois ele está relacionado a outras entidades!'
                ]);
            }
        }
    }
}
