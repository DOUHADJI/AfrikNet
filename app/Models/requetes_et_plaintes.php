<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requetes_et_plaintes extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'motif' , 'contenu', 'statut', 'client_id'];

    public function clients () {
        return $this -> belongsTo('App/clients');
    }

}
