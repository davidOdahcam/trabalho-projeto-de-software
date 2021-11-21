@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Companhias aéreas</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Painel</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.airline.index') }}">Companhias aéreas</a></li>
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

                <form action="{{ route('admin.airline.update', $airline->cd_cmpn_aerea) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}

                    <div class="card-body">
                        @include('admin.airline.form')
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('admin.airline.index') }}" class="btn btn-sm bg-gradient-danger">Cancelar</a>
                        <button class="btn btn-sm bg-gradient-second">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
