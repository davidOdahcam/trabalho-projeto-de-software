<div class="form-row">
    <div class="form-group col-md-4">
        <label for="cd_eqpt">Código do equipamento</label>
        <input type="text" name="cd_eqpt" id="cd_eqpt" class="form-control" value="{{ $equipment->cd_eqpt ?? old('cd_eqpt') }}">

        @error('cd_eqpt')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="nm_eqpt">Nome do equipamento</label>
        <input type="text" name="nm_eqpt" id="nm_eqpt" class="form-control" value="{{ $equipment->nm_eqpt ?? old('nm_eqpt') }}">

        @error('nm_eqpt')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="dc_tipo_eqpt">Tipo</label>
        <input type="text" name="dc_tipo_eqpt" id="dc_tipo_eqpt" class="form-control" value="{{ $equipment->dc_tipo_eqpt ?? old('dc_tipo_eqpt') }}">

        @error('dc_tipo_eqpt')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="qt_motor">Quantidade de motores</label>
        <input type="number" name="qt_motor" id="qt_motor" class="form-control" value="{{ $equipment->qt_motor ?? old('qt_motor') }}">

        @error('qt_motor')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="ic_tipo_prps">Tipo de propulsor</label>
        <input type="number" name="ic_tipo_prps" id="ic_tipo_prps" class="form-control" value="{{ $equipment->ic_tipo_prps ?? old('ic_tipo_prps') }}">

        @error('ic_tipo_prps')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="qt_psgr">Quantidade de passageiros</label>
        <input type="number" name="qt_psgr" id="qt_psgr" class="form-control" value="{{ $equipment->qt_psgr ?? old('qt_psgr') }}">

        @error('qt_psgr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
