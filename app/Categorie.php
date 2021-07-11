<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $guarded = [];

    public function plat()
    {
        return $this->hasMany('App\Plat');
    }
}
