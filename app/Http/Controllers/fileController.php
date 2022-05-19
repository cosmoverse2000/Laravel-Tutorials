<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileController extends Controller
{
    function index(Request $req)
    {
        $result = $req->file('data')->store('apiDocs');
        return ['result' => $result];
    }
    //
}
