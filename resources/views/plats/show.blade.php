@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{ $plat->nom }}</h1>
            <a href="/plats/{{ $plat->id }}/edit" class="btn btn-secondary my-3">Editer</a>
            <form action="/plats/{{ $plat->id }}" method="post" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
            <hr>
            Photo : <img src="{{asset('imges/'). $plat->photo}}" alt="">
        </div>
    </div>
</div>

@endsection
