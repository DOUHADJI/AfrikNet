<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    //

    public function get_forfaits_en_cours () {
             
        $forfaits_en_cours = DB::table('liste_des_forfaits')
        ->where('fini_le', '>=', Carbon::now() -> toDateTimeString())
        ->count();

        return $forfaits_en_cours;

    }


    public function dashboard (){
        return view('admin.dashboard');
    }

    
}
