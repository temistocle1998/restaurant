@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('plats.store') }}" enctype="multipart/form-data" method="post">
                @include('includes.form-plats')
                <button type="submit" class="btn btn-primary">soumettre</button>
            </form>
        </div>
    </div>
</div>
@endsection
