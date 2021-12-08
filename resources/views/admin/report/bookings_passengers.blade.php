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
                <h1 class="m-0">Reservas de passageiros</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Painel</a></li>
                    <li class="breadcrumb-item">Relatórios</li>
                    <li class="breadcrumb-item active">Reservas de passageiros</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<section class="content">
    <blockquote class="quote-second">
        <h5><i class="fas fa-info"></i> Observação:</h5>
        <p>O propósito desta página é atender ao requisito que lista todos os passageiros que possuam um <strong>código de identificação menor do que 300</strong> e suas respectivas reservas</strong>.</p>
    </blockquote>

    <div class="container-fluid">
        <div class="card card-second card-outline">
            <div class="card-body">
                <h5>Filtrar por:</h5>
                <form action="{{ route('admin.report.bookings_passengers_300') }}" method="GET" class="mb-4">
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <input type="number" name="start" id="start" class="form-control" placeholder="Código inicial" value="{{ $start ?? '' }}"/>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="number" name="end" id="end" class="form-control" placeholder="Código final" value="{{ $end ?? '' }}"/>
                        </div>

                        <div class="form-group col-md-2">
                            <button class="btn btn-second btn-block">
                                Filtrar
                            </button>
                        </div>
                    </div>
                </form>

                <div id="export-datatable"></div>
                <table id="main-datatable" class="table table-striped text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>Código do passageiro</th>
                            <th>Nome do passageiro</th>
                            <th>Reservas <small>(Número do voo: data de saída, origem — destino)</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($passengers as $passenger)
                            <tr>
                                <td>{{ $passenger->cd_psgr ?? config('general.format.empty') }}</td>
                                <td>{{ $passenger->nm_psgr ?? config('general.format.empty') }}</td>
                                <td>
                                    @if (count($passenger->bookings))
                                    @foreach ($passenger->bookings as $booking)
                                        @php
                                            $flight = Flight::where(['nr_voo' => $booking->nr_voo, 'dt_saida_voo' => $booking->dt_saida_voo])->first();
                                        @endphp
                                        <strong>{{ $booking->nr_voo }}:</strong> {{ date(config('general.format.dateBR'), strtotime($booking->dt_saida_voo)) ?? config('general.format.empty') }}, {{ $flight->route->origin->cd_arpt ?? '' }} <small>({{ $flight->route->origin->nm_cidd ?? 'Aeroporto deletado' }})</small> — {{ $flight->route->destiny->cd_arpt ?? '' }} <small>({{ $flight->route->destiny->nm_cidd ?? 'Aeroporto deletado' }})</small>
                                        <br/>
                                    @endforeach
                                    @else
                                    <span class="text-muted">Não possui reservas</span>
                                    @endif
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
                title: '{{ config("app.name") }} - Reservas de passageiros',
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
