<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cd_psgr, $nr_voo, $dt_saida_voo)
    {
        $deleted = Booking::where(['cd_psgr' => $cd_psgr, 'nr_voo' => $nr_voo, 'dt_saida_voo' => $dt_saida_voo])->delete();

        if ($deleted) {
            return response()->json([
                'success' => true,
                'message' => 'Reserva deletada com sucesso!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Ocorreu uma falha ao deletar a reserva!'
            ]);
        }
    }
}
