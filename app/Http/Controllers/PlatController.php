<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Plat;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Plat::class);
        $plats = Plat::all();

        return view('plats.index', compact('plats', 'categories'));
    }

    public function create(Plat $plat)
    {
        $categories = Categorie::all();
       return view('plats.create', compact('plat', 'categories'));
    }

    public function store()
    {

        $plat = Plat::create($this->validator());
        $this->storeImage($plat);
        return redirect('plats');
    }

    public function show(Plat $plat)
    {
        return view('plats.show', compact('plat'));
    }

    public function edit(Plat $plat)
    {
        $categories = Categorie::all();
        return view('plats.edit', compact('plat', 'categories'));
    }

    public function update(Plat $plat)
    {
        $plat->update($this->validator());
        $this->storeImage($plat);

        return redirect('plats/'. $plat->id);
    }

    public function destroy(Plat $plat)
    {
        $plat->delete();
        return redirect('plats');
    }

    public function validator()
    {
        return request()->validate([
            'nom' => 'required|string',
            'prix_unitaire' => 'required|integer',
            'categorie_id' => 'required|integer',
            'photo' => 'sometimes|image|max:5000'
        ]);
    }

    private function storeImage(Plat $plat)
    {
        if (request('photo')) {
            $plat->update([
                'photo' => request('photo')->store('images', 'public'),
            ]);
        }
    }

}
