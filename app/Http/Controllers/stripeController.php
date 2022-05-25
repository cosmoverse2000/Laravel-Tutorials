<?php

namespace App\Http\Controllers;

use Stripe;
use Session;

use Illuminate\Http\Request;

class stripeController extends Controller
{
    public function stripePayment(Request $req)
    {
        print_r($req->all());
        die();

        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        // Stripe\Charge::create(
        //     [
        //         "amount" => 100 * 100,
        //         "currency" => "usd",
        //         "source" => $req->stripeToken,
        //         "description" => "Taet pay"
        //     ]
        // );
        // $req->session()->flash('"success"', "Payment successfully!");

        // return back();

        # code...
    }
    //
}
