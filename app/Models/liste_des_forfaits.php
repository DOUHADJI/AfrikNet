<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class liste_des_forfaits extends Model
{
    use HasFactory;

    protected $fillable =[ 'souscris_le', 'fini_le', 'client_id', 'forfait_id'];


    public function Clients () {
        return $this -> belongsTo('App/clients');
    }

    public function forfaits () {
        return $this -> belongsTo('App/forfaits');
    }

    protected $dates = [
        'souscris_le', 'fini_le', 'created_at', 'updated_at'
    ];
}
