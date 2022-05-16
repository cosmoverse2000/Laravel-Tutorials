<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;


class memberController extends Controller
{
    function index()
    {
        $member = new member;
        $member->name = 'priyom';
        $member->email = 'priyom@test.com';
        $member->address = 'agra';
        $member->save();
    }
    //
}
