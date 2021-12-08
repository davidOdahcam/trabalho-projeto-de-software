<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BookingRequest;
use App\Models\{Booking, Flight, Passenger};

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::orderBy('dt_saida_voo', 'DESC')->paginate(config('general.datatable.per_page'));

        return view('admin.booking.index', [
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
        $flights = Flight::where('dt_saida_voo', '>=', date('Y-m-d'))->orderBy('dt_saida_voo', 'DESC')->get();

        return view('admin.booking.create', [
            'passengers' => $passengers,
            'flights' => $flights
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\BookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingRequest $request)
    {
        DB::beginTransaction();

        $input = $request->all();

        $created = Booking::create($input);

        if ($created) {
            DB::commit();
            sessionFlash('success', 'Reserva cadastrada com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao cadastrar a reserva!');
        }

        return redirect(route('admin.booking.index'));
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

        return view('admin.booking.edit', [
            'booking' => $booking,
            'passengers' => $passengers,
            'flights' => $flights
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\BookingRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookingRequest $request, $cd_psgr, $nr_voo, $dt_saida_voo)
    {
        DB::beginTransaction();

        $input = $request->only(['cd_psgr', 'nr_voo', 'dt_saida_voo', 'pc_desc_pasg']);
        $updated = Booking::where(['cd_psgr' => $cd_psgr, 'nr_voo' => $nr_voo, 'dt_saida_voo' => $dt_saida_voo])->update($input);

        if ($updated) {
            DB::commit();
            sessionFlash('success', 'Reserva atualizada com sucesso!');
        } else {
            DB::rollBack();
            sessionFlash('error', 'Erro ao atualizar a reserva!');
        }

        return redirect(route('admin.booking.index'));
    }
}
