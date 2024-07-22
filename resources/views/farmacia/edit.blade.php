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
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Farmacia</span>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('farmacias.update', $farmacia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('farmacia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
