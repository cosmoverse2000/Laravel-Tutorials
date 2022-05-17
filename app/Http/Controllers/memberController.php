<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\member;

class memberController extends Controller
{
    function index()
    {
        return member::find(9)->employeeData;
    }
    //
}
