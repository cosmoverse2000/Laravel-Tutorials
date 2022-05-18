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
            'Email' => "required|email",
            'address' => "required"
        );
        $validato = Validator::make($req->all(), $rules);
        if ($validato->fails()) {
            return $validato->errors();
        } else {
            $data = new member;
            $data->Name = $req->Name;
            $data->Email = $req->Email;
            $data->address = $req->address;
            $result = $data->save();
            if ($result) {
                return "Data Has Been Validated&Saved";
            } else {
                return "Inavlid Data Not Saved";
            }
        }
    }
    //
}
