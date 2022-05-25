<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\mpesaTransactions;

class mpesaController extends Controller
{
    public function mpesaPassword()
    {
        $timestamp = Carbon::rawParse('now')->format('YmdHms');
        $passKey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $bussinessShortcode = 174379;
        $mpesaPassword = base64_encode($bussinessShortcode . $passKey . $timestamp);
        return $mpesaPassword;
    }
    public function newAccessToken()
    {
        $consumer_key = "ZEuDzhFhdRqhnNpILvL7zTKA87vASlGY";
        $consumer_secret = "DipCVpVdXgN5v5xZ";
        $credentials = base64_encode($consumer_key . ":" . $consumer_secret);
        $url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type:Application/json", "Authorization: Basic . $credentials"));
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        $access_token = json_decode($curl_response);
        curl_close($curl);


        return $access_token->access_token;
    }
    public function stkPush()
    {

        $ch = curl_init('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type:application/json', 'Authorization: Bearer ' . $this->newAccessToken()

        ]);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
            "BusinessShortCode" => 174379,
            "Password" => $this->mpesaPassword(),
            "Timestamp" => Carbon::rawParse('now')->format('YmdHms'),
            "TransactionType" => "CustomerPayBillOnline",
            "Amount" => '5',
            "PartyA" => '254708374149',
            "PartyB" => 174379,
            "PhoneNumber" => '254708374149',
            "CallBackURL" => "https://5784-106-79-225-155.ngrok.io/api/mpesa/callback/url",
            "AccountReference" => "ANSHU-X-LTD",
            "TransactionDesc" => "Payment of M-Pesa"
        ]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response     = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
    public function mpesaRes(Request $req)
    {
        $response = $req->getContent();
        $trx = new mpesaTransactions;
        $trx->response = json_encode($response);
        $trx->save();
    }
    //
}
