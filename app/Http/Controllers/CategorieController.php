<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Plat;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Categorie::class);

        $categories = Categorie::all();

        return view('categories.index', compact('categories'));
    }

    public function store()
    {
        $data = request()->validate([
            'nom' => 'required|string'
        ]);

        Categorie::create($data);

        return redirect('categories');
    }

    public function show(Categorie $categorie)
    {
        //on a plus besoin de cette requete grace au modele Binding de laravel
        //$categorie = Categorie::where('id', $client)->firstOrFail();

        return view('categories.show', compact('categorie'));
    }

    public function edit(Categorie $categorie)
    {
        return view('categories.edit', compact('categorie'));
    }

    public function create()
    {
        $plat = new Plat();
        $categorie = new Categorie();

        return view('categories.create', compact('plat','categorie'));
    }

    public function update(Categorie $categorie)
    {
        $data = request()->validate([
            'nom' => 'required|string'
        ]);

        $categorie->update($data);
        return redirect('categories/'. $categorie->id);
    }

    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect('categories');
    }
}
