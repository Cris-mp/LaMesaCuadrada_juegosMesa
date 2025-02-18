@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Editorial
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
        <div class="col-lg-5 mx-auto">

                <div class="card card-default">
                    <div class="card-header logo-orange">
                        <span class="card-title">{{ __('Create') }} Editorial</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('editorials.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('editorial.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
