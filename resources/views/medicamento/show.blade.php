@extends('adminlte::page')

@section('title', 'Inventarios | Farmacias')

@section('content_header')
@stop

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h4>Detalle</h4>
</div>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Medicamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('medicamentos.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $medicamento->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $medicamento->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio:</strong>
                                    {{ $medicamento->precio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Farmacia:</strong>
                                    {{ $medicamento->farmacia->nombre }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
