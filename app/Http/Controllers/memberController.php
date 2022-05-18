<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use Validator;

class memberController extends Controller
{
    function validateData(Request $req)
    {
        $rules = array(
            'Name' => "required",
            'email' => "required|email"
        );
        $validato = Validator::make($req->all(), $rules);
        if ($validato->fails()) {
            return $validato->errors();
        } else {
            return "Ok";
        }
    }
    //
}
