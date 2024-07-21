@extends('adminlte::page')

@section('title', 'Inventarios | Editar Tarea')

@section('content_header')
@stop

@section('content')
<div class="container">
    <h3>Editar Tarea</h3>
    <form action="{{ route('tareas.update', $tarea->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $tarea->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control">{{ $tarea->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select name="estado" class="form-control" required>
                <option value="Pendiente" {{ $tarea->estado == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="Completada" {{ $tarea->estados == 'Completada' ? 'selected' : '' }}>Completada</option>
            </select>
        </div>
        <div class="form-group" style="width: 200px;">
            <label for="fecha_limite">Fecha Límite</label>
            <input type="date" name="fecha_limite" class="form-control" value="{{ $tarea->fecha_limite }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Editando Tarea!");
    </script>
@stop