<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abbonnements extends Model
{
    use HasFactory;

    protected $fillable =[ 'nom', 'volume', 'validite', 'element_de_liste_des_abonnements_id'];

    public function ElementDelisteDesAbonnements () {
        return $this -> hasMany('App/liste_des_abonnements');
    }
}
