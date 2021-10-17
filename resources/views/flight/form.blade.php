<div class="form-row">
    <div class="form-group col-md-4">
        <label for="nr_voo">Número do voo</label>
        <input type="number" name="nr_voo" id="nr_voo" class="form-control" value="{{ $flight->nr_voo ?? old('nr_voo') }}">

        @error('nr_voo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="dt_saida_voo">Data de saída</label>
        <input type="date" name="dt_saida_voo" id="dt_saida_voo" class="form-control" value="{{ (isset($flight)) ? date(config('general.format.date'), strtotime($flight->dt_saida_voo)) : old('dt_saida_voo') }}">

        @error('dt_saida_voo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="nr_rota_voo">Rota</label>
        <select name="nr_rota_voo" id="nr_rota_voo" class="form-control">
            <option value="">- Selecione um país -</option>
            @foreach ($routes as $route)
                <option value="{{ $route->nr_rota_voo }}" @if (isset($flight->nr_rota_voo) && $flight->nr_rota_voo == $route->nr_rota_voo) selected @endif>
                    {{ $route->origin->nm_cidd }} — {{ $route->destiny->nm_cidd }}
                </option>
            @endforeach
        </select>

        @error('nr_rota_voo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="cd_arnv">Aeronave</label>
        <select name="cd_arnv" id="cd_arnv" class="form-control">
            <option value="">- Selecione um país -</option>
            @foreach ($aircrofts as $aircroft)
                <option value="{{ $aircroft->cd_arnv }}" @if (isset($flight->cd_arnv) && $flight->cd_arnv == $aircroft->cd_arnv) selected @endif>
                    {{ $aircroft->cd_arnv }}
                </option>
            @endforeach
        </select>

        @error('cd_arnv')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
