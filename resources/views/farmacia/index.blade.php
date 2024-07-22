@extends('adminlte::page')

@section('title', 'Inventarios | Farmacias')

@section('content_header')
@stop

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h4>Farmacias</h4>
</div>   
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Farmacias') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('farmacias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Nueva') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Nombre</th>
									<th >Gerente</th>
									<th >Telefono</th>
									<th >Email</th>
									<th >Direccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($farmacias as $farmacia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $farmacia->nombre }}</td>
										<td >{{ $farmacia->gerente }}</td>
										<td >{{ $farmacia->telefono }}</td>
										<td >{{ $farmacia->email }}</td>
										<td >{{ $farmacia->direccion }}</td>

                                            <td>
                                                <form action="{{ route('farmacias.destroy', $farmacia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('farmacias.show', $farmacia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('farmacias.edit', $farmacia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Estas Seguro de Borrar?\nPuede Tener Elementos Asociados.') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $farmacias->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
