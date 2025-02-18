@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Tipo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
        <div class="col-lg-4 mx-auto">

                <div class="card card-default">
                    <div class="card-header logo-orange">
                        <span class="card-title">Nuevo Tipo</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tipos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
