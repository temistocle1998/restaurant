@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Categories</h1>
            <a href="{{ url('/categories/create') }}" class="btn btn-primary my-3">Nouvelle categorie</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $categorie)
                    <tr>
                        <td scope="row">{{ $categorie->id }}</td>
                        <td>{{ $categorie->nom }}</td>
                        <td><a href="/categories/{{ $categorie->id }}/edit" class="btn btn-warning float">Editer</a>
                            <a href="/categories/{{ $categorie->id }}" class="btn btn-danger float">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
