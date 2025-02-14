<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror"
                value="{{ old('nombre', $juego?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror"
                value="{{ old('precio', $juego?->precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="unidades" class="form-label">{{ __('Unidades') }}</label>
            <input type="text" name="unidades" class="form-control @error('unidades') is-invalid @enderror"
                value="{{ old('unidades', $juego?->unidades) }}" id="unidades" placeholder="Unidades">
            {!! $errors->first('unidades', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="duracion" class="form-label">{{ __('Duracion') }}</label>
            <input type="text" name="duracion" class="form-control @error('duracion') is-invalid @enderror"
                value="{{ old('duracion', $juego?->duracion) }}" id="duracion" placeholder="Duracion">
            {!! $errors->first('duracion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="edad_min" class="form-label">{{ __('Edad Min') }}</label>
            <input type="text" name="edad_min" class="form-control @error('edad_min') is-invalid @enderror"
                value="{{ old('edad_min', $juego?->edad_min) }}" id="edad_min" placeholder="Edad Min">
            {!! $errors->first('edad_min', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="jugadores_max" class="form-label">{{ __('Jugadores Max') }}</label>
            <input type="text" name="jugadores_max" class="form-control @error('jugadores_max') is-invalid @enderror"
                value="{{ old('jugadores_max', $juego?->jugadores_max) }}" id="jugadores_max"
                placeholder="Jugadores Max">
            {!! $errors->first(
                'jugadores_max',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ) !!}
        </div>
        <div class="form-group mb-2 mb20">
            {{-- <label for="editorial_id" class="form-label">{{ __('Editorial Id') }}</label>
            <input type="text" name="editorial_id" class="form-control @error('editorial_id') is-invalid @enderror" value="{{ old('editorial_id', $juego?->editorial_id) }}" id="editorial_id" placeholder="Editorial Id">
            {!! $errors->first('editorial_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!} --}}
            {{ Form::label('editorial') }}
            {{ Form::select('editorial_id', $tipo, $libro->tipo_id, ['class' => 'form-control' . ($errors->has('editorial_id') ? ' is-invalid' : ''), 'placeholder' => 'Editorial Id']) }}
            {!! $errors->first('editorial_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            {{-- <label for="tipo_id" class="form-label">{{ __('Tipo Id') }}</label>
            <input type="text" name="tipo_id" class="form-control @error('tipo_id') is-invalid @enderror"
                value="{{ old('tipo_id', $juego?->tipo_id) }}" id="tipo_id" placeholder="Tipo Id">
            {!! $errors->first('tipo_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!} --}}
            {{ Form::label('tipo') }}
            {{ Form::select('tipo_id', $tipo, $libro->tipo_id, ['class' => 'form-control' . ($errors->has('tipo_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Id']) }}
            {!! $errors->first('tipo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
