@extends('layouts.app')

@section('template_title')
    {{ $editorial->name ?? __('Show') . " " . __('Editorial') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
        <div class="col-lg-4 mx-auto">
                <div class="card">
                    <div class="card-header logo-orange" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Editoriales</span>
                        </div>
                        <div class="float-right">
                            <a class="btn logo-blue btn-sm" href="{{ route('editorials.index') }}"> <i class="fa fa-rotate-left"></i></a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $editorial->nombre }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
