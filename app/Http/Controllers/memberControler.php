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
    function update(Request $req)
    {
        $member = member::find($req->id);
        $member->Name = $req->Name;
        $member->Email = $req->Email;
        $member->address = $req->address;
        $result = $member->save();
        if ($result) {
            return "Update Success";
        } else {
            return "Update failed";
        }
    }
    function delete($id)
    {
        $member = member::find($id);

        $result = $member->delete();
        if ($result) {
            return "Delete Success";
        } else {
            return "Delete failed";
        }
    }
}
