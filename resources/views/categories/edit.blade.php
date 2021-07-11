@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Editer la categorie {{ $categorie->nom }}</h1>
            <form action="{{url('/categories')}}/{{ $categorie->id }}" method="POST">
                @method('PATCH')
                @include('includes.form-categories')
                <button type="submit" class="btn btn-primary">Sauvegarder les informations</button>
            </form>
        </div>
    </div>
</div>
@endsection
