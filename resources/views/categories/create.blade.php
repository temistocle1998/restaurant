@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('categories.store') }}" method="post">
                @include('includes.form-categories')
                <button type="submit" class="btn btn-primary">soumettre</button>
            </form>
        </div>
    </div>
</div>
@endsection
