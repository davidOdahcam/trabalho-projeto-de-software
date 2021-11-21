@extends('layouts.app')

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <style>
        .select2.select2-container.select2-container--bootstrap4 {
            width: 100% !important;
        }
    </style>
@endpush

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Voos por rota</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Painel</a></li>
                    <li class="breadcrumb-item">Relatórios</li>
                    <li class="breadcrumb-item active">Voos por rota</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<section class="content">
    <blockquote class="quote-second">
        <h5><i class="fas fa-info"></i> Observação:</h5>
        <p>O propósito desta página é listar todas rotas de voo e sua quantidade de reservas.</p>
    </blockquote>

    <div class="container-fluid">
        <div class="card card-second card-outline">
            <div class="card-body">
                <div id="export-datatable"></div>
                <table id="main-datatable" class="table table-striped text-center" style="width:100%">
                    <thead>
                        <tr>
                            <td>Rota <small>(Origem - Destino)</small></td>
                            <th>Quantidade de voos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($routes as $route)
                            <tr>
                                <td>{{ $route->origin->cd_arpt ?? '' }} <small>({{ $route->origin->nm_cidd ?? 'Aeroporto deletado' }})</small> - {{ $route->destiny->cd_arpt ?? '' }} <small>({{ $route->destiny->nm_cidd ?? 'Aeroporto deletado' }})</td>
                                <td>{{ $route->total_bookings() }}</td>
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

    {{-- Select2 --}}
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

    {{-- Custom --}}
    <script src="{{ asset('assets/js/own-assets.js') }}"></script>
    <script>
        $(document).ready(function () {
            const ps_datatable = new PSDataTable({
                title: '{{ config("app.name") }} - Voos por rota',
                columns: [0, 1],
                lang: "<?= asset('assets/lang/datatable/pt_BR.json') ?>",
                datatable: '#main-datatable',
                buttons: '#export-datatable',
                perPage: -1,
                paging: false,
                order : [[ 1, "asc" ]]
            });

            $('.select2').select2({
                theme: 'bootstrap4',
                placeholder: "País",
                closeOnSelect: false
            });
        });
    </script>
@endpush
