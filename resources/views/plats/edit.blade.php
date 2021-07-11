@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Editer le plat {{ $plat->nom }}</h1>
            <form action="{{url('/plats')}}/{{ $plat->id }}" method="POST">
                @method('PATCH')
                @include('includes.form-plats')
                <button type="submit" class="btn btn-primary">Sauvegarder les informations</button>
            </form>
        </div>
    </div>
</div>
@endsection
