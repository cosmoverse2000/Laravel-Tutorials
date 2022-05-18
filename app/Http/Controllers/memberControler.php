<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class memberControler extends Controller
{
    function index(Request $req)
    {
        $member = new member;
        $member->Name = $req->Name;
        $member->Email = $req->Email;
        $member->address = $req->address;
        $result = $member->save();
        if ($result) {
            return "Success";
        } else {
            return "failed";
        }
    }
}
