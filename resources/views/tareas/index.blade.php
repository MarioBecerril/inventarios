@extends('adminlte::page')

@section('title', 'Inventarios | Tareas')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h3>Lista de Tareas</h3>
        <a href="{{ route('tareas.create') }}" class="btn btn-primary mb-3">Nueva Tarea</a>
    </div>    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th style="width: 500px;">Descripción</th>
                <th>Estado</th>
                <th>Límite</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tareas as $tarea)
                <tr>
                    <td>{{ $tarea->id }}</td>
                    <td>{{ $tarea->nombre }}</td>
                    <td class="text-truncate" style="max-width: 500px;">{{ $tarea->descripcion }}</td>
                    <td>{{ $tarea->estado }}</td>
                    <td>{{ \Carbon\Carbon::parse($tarea->fecha_limite)->format('d/m/Y') }}</td>
                    <td>
                        <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('tareas.edit', $tarea->id) }}" class="btn btn-warning btn-sm">Edit</a>
                         
                        <form action="{{ route('tareas.destroy', $tarea->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirmDelete();">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"> Del </button>
                        </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
    <script>
        function confirmDelete() {
            return confirm('¿Estás seguro de que deseas eliminar esta tarea?');
        }
    </script>
@stop
