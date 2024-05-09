<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror"
                value="{{ old('nombre', $movie?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="categoria" class="form-label">{{ __('Categoria') }}</label><br>

            <div>
                <select name="categoria" id="">
                    <option value="Romance">Romance</option>
                    <option value="Ciencia Ficcion">Ciencia Ficcion</option>
                    <option value="Infantil">Infantil</option>
                    <option value="Terror">Terror</option>
                    <option value="Accion">Accion</option>
                </select>
            </div>
        </div>

    </div>
    <div class="form-group mb-2 mb20">
        <label for="price" class="form-label">{{ __('Price') }}</label>
        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
            value="{{ old('price', $movie?->price) }}" id="price" placeholder="Price">
        {!! $errors->first('price', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>

</div>
<div class="col-md-12 mt20 mt-2">
    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
</div>
</div>
