@extends('layouts.app')

@push('css')
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
                        <li class="breadcrumb-item active"><a href="{{ route('booking.index') }}">Reservas</a></li>
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Formulário de cadastro</h3>
                </div>

                <form action="{{ route('booking.update', ['cd_psgr' => $booking->cd_psgr, 'nr_voo' => $booking->nr_voo, 'dt_saida_voo' => date(config('general.format.date'), strtotime($booking->dt_saida_voo))]) }}" id="delete_{{ $booking->dt_saida_voo }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}

                    <div class="card-body">
                        @include('booking.form')
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('booking.index') }}" class="btn btn-sm bg-gradient-danger">Cancelar</a>
                        <button class="btn btn-sm bg-gradient-second">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        $('#nr_voo').on('change', function () {
            const values = $(this).val().split('/');

            $('[name="nr_voo"]').val(values[0]);
            $('[name="dt_saida_voo"]').val(values[1]);

        });

        @error('cd_psgr')
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ $message }}',
                confirmButtonText: 'Fechar'
            });
        @enderror
    </script>
@endpush
