<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Airline;

class AirlineController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $airline = Airline::findOrFail($id);
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
        } catch (\Throwable $th) {
            if ($th->getCode() === '23000') {
                return response()->json([
                    'success' => false,
                    'message' => 'Impossível deletar esta companhia aérea, pois ela está relacionada a outras entidades!'
                ]);
            }
        }
    }
}
