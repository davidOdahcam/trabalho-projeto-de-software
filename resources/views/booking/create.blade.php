@extends('layouts.app')

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
                        <li class="breadcrumb-item active">Adicionar</li>
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

                <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        @include('booking.form')
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('booking.index') }}" class="btn btn-sm bg-gradient-danger">Cancelar</a>
                        <button class="btn btn-sm bg-gradient-second">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        $('#nr_voo').on('change', function () {
            const values = $(this).val().split('/');

            $('[name="nr_voo"]').val(values[0]);
            $('[name="dt_saida_voo"]').val(values[1]);
        });
    </script>
@endpush
