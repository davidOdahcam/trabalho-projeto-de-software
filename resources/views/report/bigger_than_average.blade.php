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
                <h1 class="m-0">Passageiros com idade acima da média</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Painel</a></li>
                    <li class="breadcrumb-item">Relatórios</li>
                    <li class="breadcrumb-item active">Passageiros com idade acima da média</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <blockquote class="quote-second">
        <h5><i class="fas fa-info"></i> Observação:</h5>
        <p>O propósito desta página é listar os passageiros solteiros e do sexo masculino que estejam com a idade acima da média entre si.</p>
        <p><strong>Idade média:</strong> {{ number_format($average, 2) }} anos</p>
    </blockquote>

    <div class="container-fluid">
        <div class="card card-second card-outline">
            <div class="card-body">
                <div id="export-datatable"></div>

                <table id="main-datatable" class="table table-striped text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Idade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($passengers as $passenger)
                            <tr>
                                <td>{{ $passenger->nm_psgr ?? config('general.format.empty') }}</td>
                                <td>
                                    @php
                                        if ($passenger->ic_estd_civil === 'S') {
                                            $birthdate = new DateTime(date(config('general.format.date'), strtotime($passenger->dt_nasc_psgr)));
                                            $age = $birthdate->diff(new DateTime());
                                            echo $age->format('%y anos');
                                        } else {
                                            echo (date(config('general.format.dateBR'), strtotime($passenger->dt_nasc_psgr)) ?? config('general.format.empty'));
                                        }
                                    @endphp
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
                title: '{{ config("app.name") }} - Passageiros com idade acima da média',
                columns: [0, 1],
                lang: "<?= asset('assets/lang/datatable/pt_BR.json') ?>",
                datatable: '#main-datatable',
                buttons: '#export-datatable',
                perPage: -1,
                paging: false
            });
        });
    </script>
@endpush
