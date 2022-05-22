<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Razorpay\Api\Api;
use Session;

class mainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    // public function success()
    // {
    //     return view('success');
    // }

    public function payment(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $contact = $req->input('contact');
        $amount = $req->input('amount');
        $api = new Api('rzp_test_o1h6ExAiHPBUQw', '9Y5UP61XX8aC9xUIPYQ1s4zj');
        $order = $api->order->create(array('receipt' => '123', 'amount' => $amount * 100, 'currency' => 'INR'));
        $orderId = $order['id'];



        $user_pay = new Payment();
        $user_pay->name = $name;
        $user_pay->amount = $amount;
        $user_pay->payment_id = $orderId;
        $user_pay->save();



        Session::put('orderId', $orderId);
        Session::put('amount', $amount);
        Session::put('email', $email);
        Session::put('name', $name);
        Session::put('contact', $contact);

        return view('checkout');
    }

    public function pay(Request $req)
    {
        $data = $req->all();
        // return $data;

        // print_r($req->all());
        // exit();

        $user = Payment::where('payment_id', $data['rzp_orderid'])->first();
        $user->payment_done = true;
        $user->razorpay_id = $data['rzp_paymentid'];
        $user->save();

        return view('success');
        # code...
    }
    //
}
