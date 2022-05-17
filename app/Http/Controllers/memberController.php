<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class memberController extends Controller
{
    function index(member $key)
    {
        return $key;
    }
    //
}
