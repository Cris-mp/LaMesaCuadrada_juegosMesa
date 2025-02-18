@extends('layouts.app')

@section('template_title')
{{ $juego->name ?? __('Show') . " " . __('Juego') }}
@endsection

@section('content')
<section class="content container-fluid ">
    <div class="row w-100">
        <div class="col-lg-4 mx-auto">
            <div class="card ">
                <div class="card-header logo-orange" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="float-left">
                        <span class="card-title"><b>{{ $juego->nombre }}</b> </span>
                    </div>
                    <div class="float-right">
                        <a class="btn logo-blue btn-sm" href="{{ route('juegos.index') }}"> <i class="fa fa-rotate-left"></i></a>
                    </div>
                </div>

                <div class="card-body bg-white">
                    <div class="form-group mb-2 mb20">
                        <strong>Precio:</strong>
                        {{ $juego->precio }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Unidades:</strong>
                        {{ $juego->unidades }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Duracion:</strong>
                        {{ $juego->duracion }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Edad Min:</strong>
                        {{ $juego->edad_min }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Jugadores Max:</strong>
                        {{ $juego->jugadores_max }}
                    </div>
                    <!--MODIFIQUE AQUI-->
                    <div class="form-group mb-2 mb20">
                        <strong>Editorial:</strong>
                        {{ $juego->editorial->nombre }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Tipo:</strong>
                        {{ $juego->tipo->nombre }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection