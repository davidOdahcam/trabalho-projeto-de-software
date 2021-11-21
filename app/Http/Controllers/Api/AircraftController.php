<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Aircraft;

class AircraftController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Json
     */
    public function destroy($id)
    {
        try {
            $aircraft = Aircraft::findOrFail($id);
            $deleted = $aircraft->delete();

            if ($deleted) {
                return response()->json([
                    'success' => true,
                    'message' => 'Aeronave deletada com sucesso!'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Ocorreu uma falha ao deletar a aeronave!'
                ]);
            }
        } catch (\Throwable $th) {
            if ($th->getCode() === '23000') {
                return response()->json([
                    'success' => false,
                    'message' => 'Impossível deletar esta aeronave, pois ela está relacionada a outras entidades!'
                ]);
            }
        }
    }
}
