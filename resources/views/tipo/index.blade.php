@extends('layouts.app')

@section('template_title')
Tipos
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Tipos') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('tipos.create') }}" class="btn logo-orange btn-sm float-right" data-placement="left">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success m-4">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead thead-orange">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tipos as $tipo)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $tipo->nombre }}</td>

                                    <td>
                                        <form action="{{ route('tipos.destroy', $tipo->id) }}" method="POST">
                                            <a class="btn btn-link text-primary p-0 m-1" href="{{ route('tipos.show', $tipo->id) }}"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-link text-success p-0 m-1" href="{{ route('tipos.edit', $tipo->id) }}"><i class="fa fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link text-danger p-0 m-1" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $tipos->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection