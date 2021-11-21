@extends('layouts.app')

@push('css')
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
                        <li class="breadcrumb-item active"><a href="{{ route('admin.airline.index') }}">Voos</a></li>
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

                <form action="{{ route('admin.flight.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        @include('admin.flight.form')
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('admin.flight.index') }}" class="btn btn-sm bg-gradient-danger">Cancelar</a>
                        <button class="btn btn-sm bg-gradient-second">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    @error('nr_voo')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ $message }}',
            confirmButtonText: 'Fechar'
        });
    </script>
    @enderror
@endpush
