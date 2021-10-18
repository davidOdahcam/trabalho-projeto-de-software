@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Página inicial</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Painel</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <blockquote class="quote-second mt-0">
        <h5>Projeto de software</h5>
        <p>Este é um trabalho do curso de Sistemas de Informação da <strong class="text-second">Universidade Federal Rural do Rio de Janeiro</strong>. <br /> Trata-se de um projeto de software que gerencia companhias aéreas.</p>
    </blockquote>

    <div class="container-fluid">
        <h4>Ferramentas</h4>
        <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, facere!</h6>

        <div class="row">
            <div class="col-md-4">
                <div class="card card-outline card-second">
                    <div class="card-body">
                        <h5 class="card-title">Laravel</h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque in nobis aliquid minus quisquam nihil?</p>
                        <a href="#" class="btn btn-primary">Ver mais</a>
                      </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-outline card-second">
                    <div class="card-body">
                        <h5 class="card-title">PHP</h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque in nobis aliquid minus quisquam nihil?</p>
                        <a href="#" class="btn btn-primary">Ver mais</a>
                      </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-outline card-second">
                    <div class="card-body">
                        <h5 class="card-title">MySQL</h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque in nobis aliquid minus quisquam nihil?</p>
                        <a href="#" class="btn btn-primary">Ver mais</a>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
