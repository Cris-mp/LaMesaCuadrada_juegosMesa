@extends('layouts.app')

@section('template_title')
    {{ $juego->name ?? __('Show') . " " . __('Juego') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Juego</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('juegos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $juego->nombre }}
                                </div>
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
                                <div class="form-group mb-2 mb20">
                                    <strong>Editorial Id:</strong>
                                    {{ $juego->editorial_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Id:</strong>
                                    {{ $juego->tipo_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
