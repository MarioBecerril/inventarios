<?php

namespace App\Http\Controllers;

use App\Models\Farmacia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FarmaciaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FarmaciaController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $farmacias = Farmacia::paginate(10);

        return view('farmacia.index', compact('farmacias'))
            ->with('i', ($request->input('page', 1) - 1) * $farmacias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $farmacia = new Farmacia();

        return view('farmacia.create', compact('farmacia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FarmaciaRequest $request): RedirectResponse
    {
        Farmacia::create($request->validated());

        return Redirect::route('farmacias.index')
            ->with('success', 'Farmacia Creada Exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $farmacia = Farmacia::find($id);

        return view('farmacia.show', compact('farmacia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $farmacia = Farmacia::find($id);

        return view('farmacia.edit', compact('farmacia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FarmaciaRequest $request, Farmacia $farmacia): RedirectResponse
    {
        $farmacia->update($request->validated());

        return Redirect::route('farmacias.index')
            ->with('success', 'Farmacia Actualizada Exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        Farmacia::find($id)->delete();

        return Redirect::route('farmacias.index')
            ->with('success', 'Farmacia Eliminada Exitosamente');
    }
}
