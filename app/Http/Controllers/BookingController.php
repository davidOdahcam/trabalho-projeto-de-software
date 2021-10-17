<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Flight;
use App\Models\Passenger;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::paginate(config('assets.datatable.per_page'))->onEachSide(0);

        return view('booking.index', [
            'bookings' => $bookings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $passengers = Passenger::select(['cd_psgr', 'nm_psgr'])->get();
        $flights = Flight::all();

        return view('booking.create', [
            'passengers' => $passengers,
            'flights' => $flights
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        $input = $request->all();

        $created = Booking::create($input);

        if ($created) {
            DB::commit();
            Session::flash('success', 'Reserva cadastrada com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao cadastrar a reserva!');
        }

        return Redirect::route('booking.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cd_psgr, $nr_voo, $dt_saida_voo)
    {
        $booking = Booking::where(['cd_psgr' => $cd_psgr, 'nr_voo' => $nr_voo, 'dt_saida_voo' => $dt_saida_voo])->first();

        return view('booking.show', [
            'booking' => $booking
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cd_psgr, $nr_voo, $dt_saida_voo)
    {
        $booking = Booking::where(['cd_psgr' => $cd_psgr, 'nr_voo' => $nr_voo, 'dt_saida_voo' => $dt_saida_voo])->first();

        $passengers = Passenger::select(['cd_psgr', 'nm_psgr'])->get();
        $flights = Flight::orderBy('dt_saida_voo', 'DESC')->get();

        return view('booking.edit', [
            'booking' => $booking,
            'passengers' => $passengers,
            'flights' => $flights
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cd_psgr, $nr_voo, $dt_saida_voo)
    {
        DB::beginTransaction();

        $input = $request->only(['cd_psgr', 'nr_voo', 'dt_saida_voo', 'pc_desc_pasg']);
        $updated = Booking::where(['cd_psgr' => $cd_psgr, 'nr_voo' => $nr_voo, 'dt_saida_voo' => $dt_saida_voo])->update($input);

        if ($updated) {
            DB::commit();
            Session::flash('success', 'Reserva atualizada com sucesso!');
        } else {
            DB::rollBack();
            Session::flash('error', 'Erro ao atualizar a reserva!');
        }

        return Redirect::route('booking.index');
    }

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
