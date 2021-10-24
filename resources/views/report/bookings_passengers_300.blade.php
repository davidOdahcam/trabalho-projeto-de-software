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
                <h1 class="m-0">Reservas de clientes de id abaixo de 300</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Painel</a></li>
                    <li class="breadcrumb-item">Relatórios</li>
                    <li class="breadcrumb-item active">Reservas de clientes de id abaixo de 300</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div id="export-datatable"></div>
                <table id="main-datatable" class="table table-striped text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>Código do passageiro</th>
                            <th>Nome do passageiro</th>
                            <th>Reservas <small>(data de saída, origem — destino)</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($passengers as $passenger)
                            <tr>
                                <td>{{ $passenger->cd_psgr ?? config('general.format.empty') }}</td>
                                <td>{{ $passenger->nm_psgr ?? config('general.format.empty') }}</td>
                                <td>
                                    @foreach ($passenger->bookings as $booking)
                                        @php
                                            $flight = Flight::where(['nr_voo' => $booking->nr_voo, 'dt_saida_voo' => $booking->dt_saida_voo])->first();
                                        @endphp

                                        {{ date('d/m/Y', strtotime($booking->dt_saida_voo)) ?? config('general.format.empty') }}, {{ $flight->route->origin->cd_arpt ?? '' }} <small>({{ $flight->route->origin->nm_cidd ?? 'Aeroporto deletado' }})</small> — {{ $flight->route->destiny->cd_arpt ?? '' }} <small>({{ $flight->route->destiny->nm_cidd ?? 'Aeroporto deletado' }})</small>
                                        <br/>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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

    {{-- Custom --}}
    <script src="{{ asset('assets/js/own-assets.js') }}"></script>
    <script>
        $(document).ready(function () {
            const ps_datatable = new PSDataTable({
                title: '{{ config("app.name") }} - Reservas de clientes de id abaixo de 300',
                columns: [1, 2],
                lang: "<?= asset('assets/lang/datatable/pt_BR.json') ?>",
                datatable: '#main-datatable',
                buttons: '#export-datatable',
                perPage: -1,
                paging: false
            });
        });
    </script>
@endpush
