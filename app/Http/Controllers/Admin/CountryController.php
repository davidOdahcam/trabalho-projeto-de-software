<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CountryRequest;
use App\Models\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderBy('nm_pais', 'ASC')->paginate(config('general.datatable.per_page'))->onEachSide(0);

        return view('admin.country.index', [
            'countries' => $countries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CountryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
        DB::beginTransaction();

        $input = $request->all();

        $created = Country::create($input);

        if ($created) {
            DB::commit();
            sessionFlash('success', 'País cadastrado com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao cadastrar o país!');
        }

        return redirect(route('admin.country.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = Country::findOrFail($id);

        return view('admin.country.show', [
            'country' => $country
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
        $country = Country::findOrFail($id);

        return view('admin.country.edit', [
            'country' => $country
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CountryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountryRequest $request, $id)
    {
        DB::beginTransaction();

        $input = $request->all();
        $country = Country::findOrFail($id);
        $updated = $country->update($input);

        if ($updated) {
            DB::commit();
            sessionFlash('success', 'País atualizado com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao atualizar o país!');
        }

        return redirect(route('admin.country.index'));
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
            $country = Country::findOrFail($id);
            $deleted = $country->delete();

            if ($deleted) {
                return response()->json([
                    'success' => true,
                    'message' => 'País deletado com sucesso!'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Ocorreu uma falha ao deletar o país!'
                ]);
            }
        } catch (\Throwable $th) {
            if ($th->getCode() === '23000') {
                return response()->json([
                    'success' => false,
                    'message' => 'Impossível deletar este país, pois ele está relacionado a outras entidades!'
                ]);
            }
        }
    }
}
