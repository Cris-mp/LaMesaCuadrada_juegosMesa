<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EditorialRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $editorials = Editorial::paginate();

        return view('editorial.index', compact('editorials'))
            ->with('i', ($request->input('page', 1) - 1) * $editorials->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $editorial = new Editorial();

        return view('editorial.create', compact('editorial'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EditorialRequest $request): RedirectResponse
    {
        Editorial::create($request->validated());

        return Redirect::route('editorials.index')
            ->with('success', 'Editorial created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $editorial = Editorial::find($id);

        return view('editorial.show', compact('editorial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $editorial = Editorial::find($id);

        return view('editorial.edit', compact('editorial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditorialRequest $request, Editorial $editorial): RedirectResponse
    {
        $editorial->update($request->validated());

        return Redirect::route('editorials.index')
            ->with('success', 'Editorial updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Editorial::find($id)->delete();

        return Redirect::route('editorials.index')
            ->with('success', 'Editorial deleted successfully');
    }
}
