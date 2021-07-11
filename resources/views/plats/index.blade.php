@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>plats</h1>
            <a href="{{ url('/plats/create') }}" class="btn btn-primary my-3">Nouveau plat</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Categorie</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plats as $plat)
                    <tr>
                        <td scope="row">{{ $plat->id }}</td>
                        <td>{{ $plat->nom }}</td>
                        <td>{{ $plat->categorie->nom }}</td>
                        <td>{{ $plat->prix_unitaire }}</td>
                        <td class="w-25">
                            <img src="{{ asset('storage/' . $plat->photo) }}" class="img-thumbnail" width="100" alt="Sheep">
                        </td>
                        <td><a href="/plats/{{ $plat->id }}/edit" class="btn btn-warning float">Editer</a>
                            <a href="/plats/{{ $plat->id }}" class="btn btn-danger float">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
