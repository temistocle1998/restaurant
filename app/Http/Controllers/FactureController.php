<?php

namespace App\Http\Controllers;

use App\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Facture::class);
        $factures = Facture::all();

        return view('factures.index', compact('factures'));
    }
}
