<div class="form-row">
    <div class="form-group col-md-4">
        <label for="cd_psgr">Código</label>
        <input type="number" name="cd_psgr" id="cd_psgr" class="form-control" value="{{ $passenger->cd_psgr ?? old('cd_psgr') }}">

        @error('cd_psgr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="nm_psgr">Nome</label>
        <input type="text" name="nm_psgr" id="nm_psgr" class="form-control" value="{{ $passenger->nm_psgr ?? old('nm_psgr') }}">

        @error('nm_psgr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="ic_sexo_psgr">Sexo</label>
        <select name="ic_sexo_psgr" id="ic_sexo_psgr" class="form-control">
            <option value="">- Selecione seu sexo -</option>
            <option value="M" @if (isset($passenger->ic_sexo_psgr) && $passenger->ic_sexo_psgr == 'M') selected @endif>Masculino</option>
            <option value="F" @if (isset($passenger->ic_sexo_psgr) && $passenger->ic_sexo_psgr == 'F') selected @endif>Feminino</option>
        </select>

        @error('ic_sexo_psgr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="dt_nasc_psgr">Data de nascimento</label>
        <input type="date" name="dt_nasc_psgr" id="dt_nasc_psgr" class="form-control" value="{{ (isset($passenger)) ? date(config('general.format.date'), strtotime($passenger->dt_nasc_psgr)) : old('dt_nasc_psgr') }}">

        @error('dt_nasc_psgr')
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
                <option value="{{ $country->cd_pais }}" @if (isset($passenger->cd_pais) && $passenger->cd_pais == $country->cd_pais) selected @endif>{{ $country->nm_pais }}</option>
            @endforeach
        </select>

        @error('cd_pais')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="ic_estd_civil">Estado civil</label>
        <select name="ic_estd_civil" id="ic_estd_civil" class="form-control">
            <option value="">- Selecione um país -</option>
            <option value="C" @if (isset($passenger->ic_estd_civil) && $passenger->ic_estd_civil == 'C') selected @endif>Casado</option>
            <option value="S" @if (isset($passenger->ic_estd_civil) && $passenger->ic_estd_civil == 'S') selected @endif>Solteiro</option>
        </select>

        @error('ic_estd_civil')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="cd_psgr_resp">Responsável</label>
        <select name="cd_psgr_resp" id="cd_psgr_resp" class="form-control">
            <option value="">Nenhum</option>
            @foreach ($responsibles as $responsible)
                <option value="{{ $responsible->cd_psgr }}" @if (isset($passenger->cd_psgr_resp) && $passenger->responsible->cd_psgr == $responsible->cd_psgr) selected @endif>{{ $responsible->nm_psgr }}</option>
            @endforeach
        </select>

        @error('cd_psgr_resp')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
