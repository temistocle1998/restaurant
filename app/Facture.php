<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $guarded = [];

    public function plat()
    {
        return $this->belongsTo('App\Plat');
    }
}
