<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'prénom', 'contact', 'email', 'pays', 'ville', 'passeword',];

    public function ElementDelisteDesAbonnements () {
        return $this -> hasMany('App/liste_des_abonnements');
    }


    public function ElementDelisteDesForfaits () {
        return $this -> hasMany('App/liste_des_forfaits');
    }

    public function RequetePlaintes () {
        return $this -> hasMany('App/requetes_et_plaintes');
    }

    protected $dates = [
         'created_at', 'updated_at'
    ];


    public function ListeDesClients(){
        return client::all();
    }
}
