<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="farmacia_id" class="form-label">{{ __('Farmacia') }}</label>
            <select name="farmacia_id" class="form-control @error('farmacia_id') is-invalid @enderror" id="farmacia_id">
                <option value="" selected disabled>Seleccione una farmacia</option>
                @foreach ($farmacias as $id => $nombre)
                    <option value="{{ $id }}" {{ old('farmacia_id', $venta?->farmacia_id) == $id ? 'selected' : '' }}>{{ $nombre }}</option>
                @endforeach
            </select>
            {!! $errors->first('farmacia_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="medicamento_id" class="form-label">{{ __('Medicamento') }}</label>
            <select name="medicamento_id" class="form-control @error('medicamento_id') is-invalid @enderror" id="medicamento_id">
                <option value="" selected disabled>Seleccione un medicamento</option>
                @foreach ($medicamentos as $id => $nombre)
                    <option value="{{ $id }}" {{ old('medicamento_id', $venta?->medicamento_id) == $id ? 'selected' : '' }}>{{ $nombre }}</option>
                @endforeach
            </select>
            {!! $errors->first('medicamento_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="cantidad" class="form-label">{{ __('Cantidad') }}</label>
            <input type="text" name="cantidad" class="form-control @error('cantidad') is-invalid @enderror" value="{{ old('cantidad', $venta?->cantidad) }}" id="cantidad" placeholder="Cantidad">
            {!! $errors->first('cantidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="total" class="form-label">{{ __('Total') }}</label>
            <input type="text" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ old('total', $venta?->total) }}" id="total" placeholder="Total">
            {!! $errors->first('total', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <div class="float-right">
            <a class="btn btn-dark btn-sm" href="{{ route('ventas.index') }}"> {{ __('Canelar') }}</a>
        </div>
    </div>
</div>