@php
    use App\Models\Flight;
@endphp

@extends('layouts.app')

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}">
@endpush

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Reservas</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Painel</a></li>
                    <li class="breadcrumb-item active">Reservas</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">
        <div class="text-right mb-3">
            <a href="{{ route('booking.create') }}" class="btn bg-gradient-primary px-5">Nova reserva</a>
        </div>

        <div class="card card-primary card-outline">
            <div class="card-body">
                <div id="export-datatable"></div>

                <table id="main-datatable" class="table table-striped text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>Passageiro</th>
                            <th>Voo <small>(origem — destino)</small></th>
                            <th>Data de saída</th>
                            <th>Porcentagem de desconto <small>(%)</small></th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            @php
                                $flight = Flight::where(['nr_voo' => $booking->nr_voo, 'dt_saida_voo' => $booking->dt_saida_voo])->first();
                            @endphp

                            <tr>
                                <td>{{ $booking->passenger->nm_psgr ?? '' }}</td>
                                <td>{{ $flight->route->origin->nm_cidd }} — {{ $flight->route->destiny->nm_cidd }}</td>
                                <td>{{ date('d/m/Y', strtotime($booking->dt_saida_voo)) ?? '' }}</td>
                                <td>{{ number_format($booking->pc_desc_pasg, 2) ?? '' }}</td>
                                <td>
                                    <a href="{{ route('booking.show', ['cd_psgr' => $booking->cd_psgr, 'nr_voo' => $booking->nr_voo, 'dt_saida_voo' => date('Y-m-d', strtotime($booking->dt_saida_voo))]) }}" id="delete_{{ $booking->dt_saida_voo }}" class="btn btn-success btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('booking.edit', ['cd_psgr' => $booking->cd_psgr, 'nr_voo' => $booking->nr_voo, 'dt_saida_voo' => date('Y-m-d', strtotime($booking->dt_saida_voo))]) }}" id="delete_{{ $booking->dt_saida_voo }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" form="delete_{{ date('Y-m-d', strtotime($booking->dt_saida_voo)) }}" value="{{ $booking->dt_saida_voo }}" data-toggle="tooltip" title="Excluir reserva">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <form method="post" action="{{ route('booking.destroy', ['cd_psgr' => $booking->cd_psgr, 'nr_voo' => $booking->nr_voo, 'dt_saida_voo' => date('Y-m-d', strtotime($booking->dt_saida_voo))]) }}" id="delete_{{ date('Y-m-d', strtotime($booking->dt_saida_voo)) }}" class="form-delete-booking">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                cd_psgr
                nr_voo
                dt_saida_voo

                {{ $bookings->links('includes.pagination', ['paginator' => $bookings]) }}
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
    {{-- Datatable --}}
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>

    {{-- Excel --}}
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>

    {{-- PDF --}}
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>

    {{-- HTML5 --}}
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    {{-- Mensagens de alerta --}}
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    {{-- Custom --}}
    <script src="{{ asset('assets/js/own-assets.js') }}"></script>
    <script>
        $(document).ready(function () {
            const ps_datatable = new PSDataTable({
                title: '{{ config("app.name") }} - Reservas',
                columns: [0, 1, 2, 3],
                lang: "<?= asset('assets/lang/datatable/pt_BR.json') ?>",
                datatable: '#main-datatable',
                buttons: '#export-datatable',
                perPage: {{ config('assets.datatable.per_page') }}
            });

            const ps_delete = new PSDelete(
                '.form-delete-booking',
                'Tem certeza de que deseja deletar esta reserva?',
                'Você não poderá voltar atrás!',
                'warning'
            );
        });
    </script>
@endpush
