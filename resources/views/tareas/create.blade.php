@extends('adminlte::page')

@section('title', 'Inventarios | Agregar Tarea')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <h3>Agregar Nueva Tarea</h3>
        <form action="{{ route('tareas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" class="form-control" required>
                    <option value="Pendiente">Pendiente</option>
                    <option value="Completada">Completada</option>
                </select>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div class="form-group" style="width: 300px;">
                    <label for="fecha_limite">Fecha Límite</label>
                    <input type="date" id="fecha_limite" name="fecha_limite" class="form-control">
                </div>
                <div class="form-group" style="width: 400px;">
                    <label for="imagen">Imagen</label>
                    <input type="file" id="imagen" name="imagen" class="form-control" accept="image/*">
                </div>
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
        console.log("Creando Tarea Nueva!");
    </script>
@stop
