@extends('adminlte::page')

@section('title', 'Inventarios | Farmacias')

@section('content_header')
@stop

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h4>Agregar</h4>
</div>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Farmacia</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('farmacias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('farmacia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
