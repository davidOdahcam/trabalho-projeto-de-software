@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Passageiros</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Painel</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('passenger.index') }}">Passageiros</a></li>
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

                <form action="{{ route('passenger.update', $passenger->cd_psgr) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}

                    <div class="card-body">
                        @include('passenger.form')
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('passenger.index') }}" class="btn btn-sm bg-gradient-danger">Cancelar</a>
                        <button class="btn btn-sm bg-gradient-second">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
