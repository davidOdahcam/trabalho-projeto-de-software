<div class="form-row">
    <div class="form-group col-md-4">
        <label for="cd_arpt">Código do aeroporto</label>
        <input type="text" name="cd_arpt" id="cd_arpt" class="form-control" value="{{ $airport->cd_arpt ?? old('cd_arpt') }}">

        @error('cd_arpt')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="cd_pais">País</label>
        <select name="cd_pais" id="cd_pais" class="form-control">
            <option value="">- Selecione um país -</option>
            @foreach ($countries as $country)
                <option value="{{ $country->cd_pais }}" @if (isset($airport->cd_pais) && $airport->cd_pais == $country->cd_pais) selected @endif>{{ $country->nm_pais }}</option>
            @endforeach
        </select>

        @error('cd_pais')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="sg_uf">Unidade federativa</label>
        <select name="sg_uf" id="sg_uf" class="form-control">
            <option value="">- Selecione um país -</option>
            @foreach ($states as $state)
                <option value="{{ $state->sg_uf }}" @if (isset($airport->sg_uf) && $airport->sg_uf == $state->sg_uf) selected @endif>{{ $state->nm_uf }}</option>
            @endforeach
        </select>

        @error('sg_uf')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="nm_cidd">Nome da cidade</label>
        <input type="text" name="nm_cidd" id="nm_cidd" class="form-control" value="{{ $airport->nm_cidd ?? old('nm_cidd') }}">

        @error('nm_cidd')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
