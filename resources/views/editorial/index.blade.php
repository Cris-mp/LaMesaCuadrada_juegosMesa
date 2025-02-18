@extends('layouts.app')

@section('title', 'Editoriales')

@section('content')
<div class="container-fluid d-flex justify-content-center">
    <div class="row w-100">
        <div class="col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header ">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            Editoriales
                        </span>

                        <div class="float-right">
                            <a href="{{ route('editorials.create') }}" class="btn logo-orange btn-sm float-right" data-placement="left">
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
                        <table class="table table-striped table-hover text-center">
                            <thead class="thead-orange">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($editorials as $editorial)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $editorial->nombre }}</td>

                                    <td class="d-flex justify-content-center">
                                        <!-- Botón de Mostrar -->
                                        <a href="{{ route('editorials.show', $editorial->id) }}" class="btn btn-link text-primary p-0 m-1">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                        <!-- Botón de Editar -->
                                        <a href="{{ route('editorials.edit', $editorial->id) }}" class="btn btn-link text-success p-0 m-1">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <!-- Botón de Eliminar -->
                                        <form action="{{ route('editorials.destroy', $editorial->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este juego?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link text-danger p-0 m-1">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $editorials->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection