<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class ClientDetailsController extends Controller
{
    //

    public function edit_client ($id){

        return view('admin.clientDetails', ['client' => client::findOrFail($id)]);
    }


    public function update_client ($id, Request $request) {

       

         return view ('admin.clientDetails', ['client' => client::findOrFails($id)]);
    }

}
