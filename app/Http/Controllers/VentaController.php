<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Medicamento;
use App\Models\Farmacia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\VentaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class VentaController extends Controller
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
        $ventas = Venta::paginate(10);

        return view('venta.index', compact('ventas'))
            ->with('i', ($request->input('page', 1) - 1) * $ventas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $venta = new Venta();
        $farmacias = Farmacia::pluck('nombre', 'id');
        $medicamentos = Medicamento::pluck('nombre', 'id');
        return view('venta.create', compact('venta', 'farmacias', 'medicamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VentaRequest $request): RedirectResponse
    {
        Venta::create($request->validated());

        return Redirect::route('ventas.index')
            ->with('success', 'Venta Creada Exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $venta = Venta::find($id);

        return view('venta.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $venta = Venta::find($id);
        $farmacias = Farmacia::pluck('nombre', 'id');
        $medicamentos = Medicamento::pluck('nombre', 'id');
        return view('venta.edit', compact('venta', 'farmacias', 'medicamentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VentaRequest $request, Venta $venta): RedirectResponse
    {
        $venta->update($request->validated());

        return Redirect::route('ventas.index')
            ->with('success', 'Venta Actualizada Exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        Venta::find($id)->delete();

        return Redirect::route('ventas.index')
            ->with('success', 'Venta Eliminada Exitosamente');
    }
}
