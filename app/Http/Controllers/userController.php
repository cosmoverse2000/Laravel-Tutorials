<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\member;

class userController extends Controller
{
    function index()
    {
        return member::find(1)->manyData;
    }
    //
}
