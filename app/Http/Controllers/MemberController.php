<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\member;
use App\Models\trip_cresent;
use Illuminate\Http\Request;

class memberController extends Controller
{
    function index()
    {
        // FOR DB BASED


        //return DB::connection('mysql2')->table('trip_cresent')->get();
        // return DB::table('members')->get();


        /* FOR MODEL BASED 
        */
        // return members::all();
        return trip_cresent::all();
    }
    //
}
