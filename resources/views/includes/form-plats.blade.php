@csrf
<div class="form-group">
  <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="Entrer le nom du plat ..."  value="{{ old('nom') ?? $plat->nom}}">
  @error('nom')
  <div class="invalid-feedback">
    {{$errors->first('nom')}}
  </div>
  @enderror
</div>
<div class="form-group">
    <input type="number" name="prix_unitaire" class="form-control @error('prix_unitaire') is-invalid @enderror" placeholder="Entrer le prix ..."  value="{{ old('nom') ?? $plat->nom}}">
    @error('prix_unitaire')
    <div class="invalid-feedback">
      {{$errors->first('prix_unitaire')}}
    </div>
    @enderror
</div>
<div class="form-group">
    <select class="form-control @error('categorie_id') is-invalid @enderror" name="categorie_id" id="">
        @foreach ($categories as $categorie)
            <option value="{{ $categorie->id }}" {{ $plat->categorie_id == $categorie->id ? 'selected' : '' }}>{{ $categorie->nom }}</option>
        @endforeach
    </select>
    @error('categorie_id')
        <div class="invalid-feedback">
            {{$errors->first('categorie_id')}}
        </div>
    @enderror
</div>
<input type="file" name="photo" id="">
