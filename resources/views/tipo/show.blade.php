@extends('layouts.app')

@section('template_title')
    {{ $tipo->name ?? __('Show') . " " . __('Tipo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
        <div class="col-lg-5 mx-auto">
                <div class="card">
                    <div class="card-header logo-orange" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Tipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn logo-blue btn-sm" href="{{ route('tipos.index') }}"> <i class="fa fa-rotate-left"></i></a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $tipo->nombre }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
