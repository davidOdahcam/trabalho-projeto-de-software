<div class="form-row">
    <div class="form-group col-md-4">
        <label for="cd_pais">Código do país</label>
        <input type="text" name="cd_pais" id="cd_pais" class="form-control" value="{{ $country->cd_pais ?? old('cd_pais') }}">

        @error('cd_pais')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="nm_pais">Nome do país</label>
        <input type="text" name="nm_pais" id="nm_pais" class="form-control" value="{{ $country->nm_pais ?? old('nm_pais') }}">

        @error('nm_pais')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="qt_pplc_pais">Código da aeronave</label>
        <input type="number" name="qt_pplc_pais" id="qt_pplc_pais" class="form-control" value="{{ $country->qt_pplc_pais ?? old('qt_pplc_pais') }}">

        @error('qt_pplc_pais')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
