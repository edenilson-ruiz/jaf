<div class="form-row">
    <div class="form-group col-md-6">
        <label for="departamento">Departamento</label>
        <select wire:model="selectedDepartamento" type="text" class="form-control" id="departamento" name="departamento">
            <option value="">---</option>
            @foreach ($departamentos as $departamento)
                <option value="{{ $departamento->id }}">{{ $departamento->name }}</option>
            @endforeach
        </select>
        @error('departamento')
            <span class="error text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label for="municipio">Municipio</label>
        <select wire:model="selectedMunicipio" type="text" class="form-control" id="municipio" name="departamento">
            <option value="">---</option>
            @if (!is_null($municipios))
                @foreach ($municipios as $municipio)
                    <option value="{{ $municipio->id }}">{{ $municipio->name }}</option>
                @endforeach
            @endif
        </select>
        @error('municipio')
            <span class="error text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
