@extends('layouts.app')

@section('content')
<div class="container">
<div class="row py-4">
    @foreach ($plats as $plat)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img style="height: 150px" class="img-thumbnail" src="{{ asset('storage/' . $plat->photo) }}" alt="">

                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                  <h4 class="card-title">{{$plat->nom}}</h4>
                  <p class="card-text">
                      <span class="badge badge-primary">{{$plat->prix_unitaire}}</span>
                      <span class="badge badge-primary">{{$plat->categorie->nom}}</span>
                  </p>
                  <div class="d-flex justify-content-end">
                    <a href="/commandes/{{$plat->id}}" class="btn btn-warning">acheter</a>
                  </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
@endsection
