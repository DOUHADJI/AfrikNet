<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forfaits extends Model
{
    use HasFactory;

    protected $fillable =[ 'nom', 'volume', 'validite', 'element_de_liste_des_forfaits_id'];


    public function ElementDelisteDesForfaits () {
        return $this -> hasMany('App/liste_des_forfaits');
    }

    protected $dates = [
        'created_at', 'updated_at'
   ];
}
