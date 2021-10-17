<div class="form-row">
    <div class="form-group col-md-4">
        <label for="nr_rota_voo">Código da rota</label>
        <input type="text" name="nr_rota_voo" id="nr_rota_voo" class="form-control" value="{{ $route->nr_rota_voo ?? old('nr_rota_voo') }}">

        @error('nr_rota_voo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="cd_arpt_orig">Aeroporto de origem</label>
        <select name="cd_arpt_orig" id="cd_arpt_orig" class="form-control">
            <option value="">- Selecione um aeroporto -</option>
            @foreach ($airports as $airport)
                <option value="{{ $airport->cd_arpt }}" @if (isset($route->cd_arpt_orig) && $route->cd_arpt_orig == $airport->cd_arpt) selected @endif>{{ $airport->cd_arpt }}: {{ $airport->nm_cidd }}</option>
            @endforeach
        </select>

        @error('cd_arpt_orig')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="cd_arpt_dest">Aeroporto de destino</label>
        <select name="cd_arpt_dest" id="cd_arpt_dest" class="form-control">
            <option value="">- Selecione um aeroporto -</option>
            @foreach ($airports as $airport)
                <option value="{{ $airport->cd_arpt }}" @if (isset($route->cd_arpt_dest) && $route->cd_arpt_dest == $airport->cd_arpt) selected @endif>{{ $airport->cd_arpt }}: {{ $airport->nm_cidd }}</option>
            @endforeach
        </select>

        @error('cd_arpt_dest')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="vr_pasg">Valor da passagem</label>
        <input type="number" name="vr_pasg" id="vr_pasg" class="form-control" value="{{ $route->vr_pasg ?? old('vr_pasg') }}">

        @error('vr_pasg')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
