<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class Liste_des_clientsController extends Controller
{
    //

    public function index(){
        $clients = client::all();
        return   view ('admin.Liste_des_clients') -> with('clients', $clients);
    }

}
