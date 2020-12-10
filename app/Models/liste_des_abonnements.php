<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class liste_des_abonnements extends Model
{
    use HasFactory;

    protected $fillable =[ 'souscris_le', 'fini_le', 'client_id', 'abbonnement_id'];


    public function Clients () {
        return $this -> belongsTo('App/clients');
    }

    public function abbonnements () {
        return $this -> belongsTo('App/abbonnements');
    }

    protected $dates = [
        'souscris_le', 'fini_le', 'created_at', 'updated_at'
    ];

    
}
