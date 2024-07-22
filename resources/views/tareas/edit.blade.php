@extends('adminlte::page')

@section('title', 'Inventarios | Editar Tarea')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <h3>Editar Tarea</h3>
        <form action="{{ route('tareas.update', $tarea->id) }}" method="POST" enctype="multipart/form-data">
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
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div class="form-group" style="width: 300px;">
                    <label for="fecha_limite">Fecha Límite</label>
                    <input type="date" name="fecha_limite" class="form-control" value="{{ $tarea->fecha_limite }}">
                </div>
                <div class="form-group" style="width: 400px;">
                    <label for="imagen">Imagen</label>
                    <input type="file" id="imagen" name="imagen" class="form-control" accept="image/*">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            @if ($tarea->imagen)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $tarea->imagen) }}" alt="Imagen de la tarea" style="max-width: 300px;">
                </div>
            @endif
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
