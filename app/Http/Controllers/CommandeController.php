<?php

namespace App\Http\Controllers;

use App\Facture;
use App\Plat;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function commander($id)
    {
        $plat = Plat::find($id);

        return view('commandes.show', compact('plat'));
    }

    public function payer(Request $request)
    {
        $data = $request->all();

        $data['prix_total'] = $data['quantite']*$data['prix_unitaire'];
        $data['montant_global'] = $data['prix_total']-($data['prix_total']*0.18);

        Facture::create($data);

        return redirect('home');
    }
}
