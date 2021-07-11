@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Commander le plat : {{ $plat->nom }}</h1>
            <img src="{{ asset('storage/' . $plat->photo) }}" class="img-thumbnail" width="100" alt="Plat">
            <hr>
            <form action="/commandes" method="post">
                @csrf
                <div class="form-group">
                    <input type="hidden" readonly name="plat_id" value="{{ old('nom') ?? $plat->id}}">
                    <input type="number" class="form-control" readonly name="prix_unitaire" value="{{ old('prix_unitaire') ?? $plat->prix_unitaire}}">
                </div>
                <div class="form-group">
                    <input type="number" name="quantite"
                        class="form-control @error('quantite') is-invalid @enderror"
                        placeholder="Entrer la quantite ..." >
                    @error('quantite')
                    <div class="invalid-feedback">
                        {{$errors->first('quantite')}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">payer</button>
            </form>
        </div>
    </div>
</div>

@endsection
