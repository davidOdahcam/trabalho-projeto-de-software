<div class="form-row">
    <div class="form-group col-md-6">
        <label for="sg_uf">Sigla</label>
        <input type="text" name="sg_uf" id="sg_uf" class="form-control" value="{{ $airport->sg_uf ?? old('sg_uf') }}">

        @error('sg_uf')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="nm_uf">Nome</label>
        <input type="text" name="nm_uf" id="nm_uf" class="form-control" value="{{ $airport->nm_uf ?? old('nm_uf') }}">

        @error('nm_uf')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
