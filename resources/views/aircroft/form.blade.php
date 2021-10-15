<div class="form-row">
    <div class="form-group col-md-4">
        <label for="cd_arnv">Código da aeronave</label>
        <input type="text" name="cd_arnv" id="cd_arnv" class="form-control" value="{{ $aircroft->cd_arnv ?? old('cd_arnv') }}">

        @error('cd_arnv')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="cd_eqpt">Equipamento</label>
        <select name="cd_eqpt" id="cd_eqpt" class="form-control">
            <option value="">- Selecione um equipamento -</option>
            @foreach ($equipments as $equipment)
                <option value="{{ $equipment->cd_eqpt }}" @if (isset($aircroft->cd_eqpt) && $aircroft->cd_eqpt == $equipment->cd_eqpt) selected @endif>{{ $equipment->nm_eqpt }}</option>
            @endforeach
        </select>

        @error('cd_eqpt')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="cd_cmpn_aerea">Companhia aérea</label>
        <select name="cd_cmpn_aerea" id="cd_cmpn_aerea" class="form-control">
            <option value="">- Selecione uma companhia aérea -</option>
            @foreach ($airlines as $airline)
                <option value="{{ $airline->cd_cmpn_aerea }}" @if (isset($aircroft->cd_cmpn_aerea) && $aircroft->cd_cmpn_aerea == $airline->cd_cmpn_aerea) selected @endif>{{ $airline->nm_cmpn_aerea }}</option>
            @endforeach
        </select>

        @error('cd_cmpn_aerea')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
