<?php

namespace App\Http\Controllers;

use App\Http\Requests\RouteRequest;
use App\Models\Airport;
use App\Models\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = Route::paginate(config('general.datatable.per_page'));

        return view('route.index', [
            'routes' => $routes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $airports = Airport::select(['cd_arpt', 'nm_cidd'])->get();

        return view('route.create', [
            'airports' => $airports
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RouteRequest $request)
    {
        DB::beginTransaction();

        $input = $request->all();

        $created = Route::create($input);

        if ($created) {
            DB::commit();
            Session::flash('success', 'Rota de voo cadastrada com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao cadastrar a rota de voo!');
        }

        return Redirect::route('route.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $route = Route::findOrFail($id);

        return view('route.show', [
            'route' => $route
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
        $airports = Airport::select(['cd_arpt', 'nm_cidd'])->get();
        $route = Route::findOrFail($id);

        return view('route.edit', [
            'route' => $route,
            'airports' => $airports
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RouteRequest $request, $id)
    {
        DB::beginTransaction();

        $input = $request->all();
        $route = Route::findOrFail($id);
        $updated = $route->update($input);

        if ($updated) {
            DB::commit();
            Session::flash('success', 'Rota de voo atualizada com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao atualizar a rota de voo!');
        }

        return Redirect::route('route.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $route = Route::findOrFail($id);
        $deleted = $route->delete();

        if ($deleted) {
            return response()->json([
                'success' => true,
                'message' => 'Rota de voo deletada com sucesso!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Ocorreu uma falha ao deletar a rota de voo!'
            ]);
        }
    }
}
