@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Juego
@endsection

@section('content')
    <section class="container-fluid">
        <div class="">
        <div class="col-lg-5 mx-auto">

                <div class="card card-default">
                    <div class="card-header logo-orange">
                        <span class="card-title">Editar Juego</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('juegos.update', $juego->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('juego.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
