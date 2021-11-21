<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Flight;

class FlightController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nr_voo, $dt_saida_voo)
    {
        try {
            $flight = Flight::where(['nr_voo' => $nr_voo, 'dt_saida_voo' => $dt_saida_voo])->first();
            $deleted = $flight->delete();

            if ($deleted) {
                return response()->json([
                    'success' => true,
                    'message' => 'Aeroporto deletado com sucesso!'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Ocorreu uma falha ao deletar  aeroporto!'
                ]);
            }
        } catch (\Throwable $th) {
            if ($th->getCode() === '23000') {
                return response()->json([
                    'success' => false,
                    'message' => 'Impossível deletar este voo, pois ele está relacionado a outras entidades!'
                ]);
            }
        }
    }
}
