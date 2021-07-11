@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Liste des ventes</h1>
            {{-- <a href="{{ url('/factures/create') }}" class="btn btn-primary my-3">Nouveau facture</a> --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">plat</th>
                        <th scope="col">quantite</th>
                        <th scope="col">Prix unitaire</th>
                        <th scope="col">Prix Total</th>
                        <th scope="col">Montant global</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($factures as $facture)
                    <tr>
                        <td scope="row">{{ $facture->id }}</td>
                        <td>{{ $facture->plat->nom }}</td>
                        <td>{{ $facture->quantite }}</td>
                        <td>{{ $facture->plat->prix_unitaire }}</td>
                        <td>{{ $facture->montant_global }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
