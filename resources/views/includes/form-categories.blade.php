@csrf
<div class="form-group">
  <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="Entrer le nom de la catégorie ..."  value="{{ old('nom') ?? $categorie->nom}}">
  @error('nom')
  <div class="invalid-feedback">
    {{$errors->first('nom')}}
  </div>
  @enderror
</div>
