@extends('adminlte::page')

@section('title', 'Inventarios | Farmacias')

@section('content_header')
@stop

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h4>Editar</h4>
</div>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Venta</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('ventas.update', $venta->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('venta.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
