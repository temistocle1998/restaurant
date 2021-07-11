@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{ $categorie->nom }}</h1>
            <a href="/categories/{{ $categorie->id }}/edit" class="btn btn-secondary my-3">Editer</a>
            <form action="/categories/{{ $categorie->id }}" method="post" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
            <hr>
        </div>
    </div>
</div>

@endsection
