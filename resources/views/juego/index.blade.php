@extends('layouts.app')
@section('title', 'Juegos')

@section('content')
<div class="container-fluid d-flex justify-content-center">
    <div class="row w-100">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span id="card_title">{{ __('Juegos') }}</span>
                    @if (Auth::user()->rol == "admin")
                    <!-- Botón Crear con Icono -->
                    <a href="{{ route('juegos.create') }}" class="btn logo-orange btn-sm">
                        <i class="fa fa-plus"></i> <i class="fa fa-puzzle-piece"></i> <!-- Icono de FontAwesome -->
                    </a>
                    @endif
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
                                    <th>Precio</th>
                                    <th>Unidades</th>
                                    <th>Duración</th>
                                    <th>Edad Mín.</th>
                                    <th>Jugadores Máx.</th>
                                    <th>Editorial</th>
                                    <th>Tipo</th>
                                    <th>Acciones</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($juegos as $juego)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $juego->nombre }}</td>
                                    <td>{{ $juego->precio }}</td>
                                    <td>{{ $juego->unidades }}</td>
                                    <td>{{ $juego->duracion }}</td>
                                    <td>{{ $juego->edad_min }}</td>
                                    <td>{{ $juego->jugadores_max }}</td>
                                    <td>{{ $juego->editorial->nombre }}</td>
                                    <td>{{ $juego->tipo->nombre }}</td>

                                    <!-- Botones con Iconos -->
                                    <td class="d-flex justify-content-center">
                                        <!-- Botón de Mostrar -->
                                        <a href="{{ route('juegos.show', $juego->id) }}" class="btn btn-link text-primary p-0 m-1">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        @if (Auth::user()->rol == "admin")

                                        <!-- Botón de Editar -->
                                        <a href="{{ route('juegos.edit', $juego->id) }}" class="btn btn-link text-success p-0 m-1">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <!-- Botón de Eliminar -->
                                        <form action="{{ route('juegos.destroy', $juego->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este juego?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link text-danger p-0 m-1">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $juegos->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection