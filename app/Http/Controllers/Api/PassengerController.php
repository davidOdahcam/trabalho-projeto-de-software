<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Passenger;

class PassengerController extends Controller
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
            $passenger = Passenger::findOrFail($id);
            $deleted = $passenger->delete();

            if ($deleted) {
                return response()->json([
                    'success' => true,
                    'message' => 'Passageiro deletado com sucesso!'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Ocorreu uma falha ao deletar o passageiro!'
                ]);
            }
        } catch (\Throwable $th) {
            if ($th->getCode() === '23000') {
                return response()->json([
                    'success' => false,
                    'message' => 'Impossível deletar este passageiro, pois ele está relacionada a outras entidades!'
                ]);
            }
        }
    }
}
