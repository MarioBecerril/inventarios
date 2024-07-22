<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use App\Models\Farmacia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MedicamentoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MedicamentoController extends Controller
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
        $medicamentos = Medicamento::paginate(10);

        return view('medicamento.index', compact('medicamentos'))
            ->with('i', ($request->input('page', 1) - 1) * $medicamentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $medicamento = new Medicamento();
        $farmacias = Farmacia::pluck('nombre', 'id');
        return view('medicamento.create', compact('medicamento', 'farmacias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MedicamentoRequest $request): RedirectResponse
    {
        Medicamento::create($request->validated());

        return Redirect::route('medicamentos.index')
            ->with('success', 'Medicamento Creado Exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $medicamento = Medicamento::find($id);

        return view('medicamento.show', compact('medicamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $medicamento = Medicamento::find($id);
        $farmacias = Farmacia::pluck('nombre', 'id');
        return view('medicamento.edit', compact('medicamento', 'farmacias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MedicamentoRequest $request, Medicamento $medicamento): RedirectResponse
    {
        $medicamento->update($request->validated());

        return Redirect::route('medicamentos.index')
            ->with('success', 'Medicamento Actualizado Exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        Medicamento::find($id)->delete();

        return Redirect::route('medicamentos.index')
            ->with('success', 'Medicamento Eliminado Exitosamente');
    }
}
