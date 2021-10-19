<?php

namespace App\Http\Controllers;

use App\Http\Requests\StateRequest;
use App\Models\State;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::paginate(config('general.datatable.per_page'));

        return view('state.index', [
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
        return view('state.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StateRequest $request)
    {
        DB::beginTransaction();

        $input = $request->all();

        $created = State::create($input);

        if ($created) {
            DB::commit();
            Session::flash('success', 'Aeroporto cadastrado com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao cadastrar o aeroporto!');
        }

        return Redirect::route('state.index');
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

        return view('state.show', [
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

        return view('state.edit', [
            'state' => $state
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
            Session::flash('success', 'Aeroporto atualizado com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao atualizar o aeroporto!');
        }

        return Redirect::route('state.index');
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
