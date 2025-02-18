@extends('layouts.app')

@section('title', 'La mesa Cuadrada')

@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<div class="image-container">
    <div class="centered-content">
        <img src="{{ asset('images/logo_big.png') }}" alt="Imagen centrada" class="centered-image" />
    </div>
</div>

@endsection