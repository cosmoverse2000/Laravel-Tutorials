<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class dummyApi extends Controller
{
    function index()
    {
        return ["name" => 'anshul', "email" => "bhadwa", "id" => '4'];
    }
    //
}
