<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Equipment;

class EquipmentController extends Controller
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
            $equipment = Equipment::findOrFail($id);
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
        } catch (\Throwable $th) {
            if ($th->getCode() === '23000') {
                return response()->json([
                    'success' => false,
                    'message' => 'Impossível deletar este equipamento, pois ele está relacionado a outras entidades!'
                ]);
            }
        }
    }
}
