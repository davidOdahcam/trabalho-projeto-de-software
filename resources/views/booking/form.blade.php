<div class="form-row">
    <input type="hidden" name="nr_voo" value="{{ $booking->nr_voo ?? old('nr_voo') }}">
    <input type="hidden" name="dt_saida_voo" value="{{ (isset($booking)) ? date(config('general.format.date'), strtotime($booking->dt_saida_voo)) : old('dt_saida_voo') }}">

    <div class="form-group col-md-4">
        <label for="cd_psgr">Passageiro</label>
        <select name="cd_psgr" id="cd_psgr" class="form-control">
            <option value="">- Selecione um passageiro -</option>
            @foreach ($passengers as $passenger)
                <option value="{{ $passenger->cd_psgr }}" @if ((isset($booking->cd_psgr) && $booking->cd_psgr == $passenger->cd_psgr) || ($passenger->cd_psgr == old('cd_psgr'))) selected @endif>{{ $passenger->nm_psgr }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-md-4">
        <label for="nr_voo">Voo</label>
        <select id="nr_voo" class="form-control">
            <option value="">- Selecione um voo -</option>
            @foreach ($flights as $flight)
                <option value="{{ $flight->nr_voo }}/{{ date(config('general.format.date'), strtotime($flight->dt_saida_voo)) }}" @if ((isset($booking->nr_voo) && ($booking->nr_voo == $flight->nr_voo) && ($booking->dt_saida_voo == $flight->dt_saida_voo)) || (old('nr_voo') == $flight->nr_voo) && (old('dt_saida_voo') == date(config('general.format.date'), strtotime($flight->dt_saida_voo)))) selected @endif>{{ date(config('general.format.dateBR'), strtotime($flight->dt_saida_voo)) }}: {{ $flight->route->origin->nm_cidd }} — {{ $flight->route->destiny->nm_cidd }}</option>
            @endforeach
        </select>

        @error('nr_voo')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="pc_desc_pasg">Porcentagem de desconto</label>
        <input type="number" name="pc_desc_pasg" id="pc_desc_pasg" class="form-control" step="0.1" value="{{ $booking->pc_desc_pasg ?? old('pc_desc_pasg') }}">

        @error('pc_desc_pasg')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
