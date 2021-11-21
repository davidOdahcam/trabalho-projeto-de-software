<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Route;

class RouteController extends Controller
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
        } catch (\Throwable $th) {
            if ($th->getCode() === '23000') {
                return response()->json([
                    'success' => false,
                    'message' => 'Impossível deletar esta rota de voo, pois ela está relacionada a outras entidades!'
                ]);
            }
        }
    }
}
