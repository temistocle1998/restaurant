<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    protected $guarded = [];

    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function facture()
    {
        return $this->hasMany('App\Facture');
    }
}
