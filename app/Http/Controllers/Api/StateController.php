<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\State;

class StateController extends Controller
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
