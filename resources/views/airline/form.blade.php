<div class="form-row">
    <div class="form-group col-md-4">
        <label for="cd_cmpn_aerea">Código da companhia aérea</label>
        <input type="text" name="cd_cmpn_aerea" id="cd_cmpn_aerea" class="form-control" value="{{ $airline->cd_cmpn_aerea ?? old('cd_cmpn_aerea') }}">

        @error('cd_cmpn_aerea')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="nm_cmpn_aerea">Nome da companhia aérea</label>
        <input type="text" name="nm_cmpn_aerea" id="nm_cmpn_aerea" class="form-control" value="{{ $airline->nm_cmpn_aerea ?? old('nm_cmpn_aerea') }}">

        @error('nm_cmpn_aerea')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="cd_pais">País</label>
        <select name="cd_pais" id="cd_pais" class="form-control">
            <option value="">- Selecione um país -</option>
            @foreach ($countries as $country)
                <option value="{{ $country->cd_pais }}" @if (isset($airline->cd_pais) && $airline->cd_pais == $country->cd_pais) selected @endif>{{ $country->nm_pais }}</option>
            @endforeach
        </select>

        @error('cd_pais')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
