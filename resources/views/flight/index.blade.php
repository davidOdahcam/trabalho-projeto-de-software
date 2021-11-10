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
                <h1 class="m-0">Voos</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Painel</a></li>
                    <li class="breadcrumb-item active">Voos</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">
        <div class="text-right mb-3">
            <a href="{{ route('flight.create') }}" class="btn bg-gradient-primary px-5">Novo voo</a>
        </div>

        <div class="card card-second card-outline">
            <div class="card-body">
                <div id="export-datatable"></div>

                <table id="main-datatable" class="table table-striped text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>Número do voo</th>
                            <th>Data de saída</th>
                            <th>Rota</th>
                            <th>Aeronave</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($flights as $flight)
                            <tr>
                                <td>{{ $flight->nr_voo ?? config('general.format.empty') }}</td>
                                <td>{{ date(config('general.format.dateBR'), strtotime($flight->dt_saida_voo)) ?? config('general.format.empty') }}</td>
                                <td>{{ $flight->route->origin->cd_arpt }} <small>({{ $flight->route->origin->nm_cidd }})</small> — {{ $flight->route->origin->cd_arpt }} <small>({{ $flight->route->destiny->nm_cidd }})</small></td>
                                <td>{{ $flight->cd_arnv ?? config('general.format.empty') }}</td>
                                <td>
                                    {{-- <a href="{{ route('flight.show', ['nr_voo' => $flight->nr_voo, 'dt_saida_voo' => date(config('general.format.date'), strtotime($flight->dt_saida_voo))]) }}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Visualizar voo">
                                        <i class="fas fa-eye"></i>
                                    </a> --}}
                                    <a href="{{ route('flight.edit', ['nr_voo' => $flight->nr_voo, 'dt_saida_voo' => date(config('general.format.date'), strtotime($flight->dt_saida_voo))]) }}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Editar voo">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" form="delete_{{ $flight->nr_voo }}_{{ date(config('general.format.date'), strtotime($flight->dt_saida_voo)) }}" value="{{ $flight->nr_voo }}" data-toggle="tooltip" title="Excluir voo">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <form method="post" action="{{ route('flight.destroy', ['nr_voo' => $flight->nr_voo, 'dt_saida_voo' => date(config('general.format.date'), strtotime($flight->dt_saida_voo))]) }}" id="delete_{{ $flight->nr_voo }}_{{ date(config('general.format.date'), strtotime($flight->dt_saida_voo)) }}" class="form-delete-flight">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $flights->links('includes.pagination', ['paginator' => $flights]) }}
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
                title: '{{ config("app.name") }} - Voos, página {{ $flights->currentPage() }}',
                columns: [0, 1, 2],
                lang: "<?= asset('assets/lang/datatable/pt_BR.json') ?>",
                datatable: '#main-datatable',
                buttons: '#export-datatable',
                perPage: {{ config('general.datatable.per_page') }}
            });

            const ps_delete = new PSDelete(
                '.form-delete-flight',
                'Tem certeza de que deseja deletar este voo?',
                'Você não poderá voltar atrás!',
                'warning',
                'Deletado'
            );
        });
    </script>
@endpush
