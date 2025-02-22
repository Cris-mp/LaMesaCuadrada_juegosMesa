<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Models\Editorial;
use App\Models\Tipo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\JuegoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $juegos = Juego::paginate();

        return view('juego.index', compact('juegos'))
            ->with('i', ($request->input('page', 1) - 1) * $juegos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
      //NOTE: EDITE AQUI PARA REFERENCIAR LAS TABLAS
    public function create(): View
    {
        $juego = new Juego();
        $editorial = Editorial::pluck('nombre','id');
        $tipo = Tipo::pluck('nombre','id');
        return view('juego.create', compact('juego','editorial','tipo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JuegoRequest $request): RedirectResponse
    {
        Juego::create($request->validated());

        return Redirect::route('juegos.index')
            ->with('success', 'Juego created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $juego = Juego::find($id);

        return view('juego.show', compact('juego'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    //NOTE: EDITE AQUI PARA REFERENCIAR LAS TABLAS
    public function edit($id): View
    {
        $juego = Juego::find($id);
        $editorial = Editorial::pluck('nombre','id');
        $tipo = Tipo::pluck('nombre','id');
        return view('juego.edit', compact('juego','editorial','tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JuegoRequest $request, Juego $juego): RedirectResponse
    {
        $juego->update($request->validated());

        return Redirect::route('juegos.index')
            ->with('success', 'Juego updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Juego::find($id)->delete();

        return Redirect::route('juegos.index')
            ->with('success', 'Juego deleted successfully');
    }
}
