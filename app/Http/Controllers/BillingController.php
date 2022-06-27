<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BillingController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->id);

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.stripe.com/v1/charges',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Stripe-Account:'.$user->stripe_id,
            'Authorization: Bearer '.Stripe::$apiKey,
            ),
        ));

        $response = curl_exec($curl);
        $query['myCharge'] = json_decode($response);
        $query['myData'] = $query['myCharge']->data;
        // dd($query['myCharge']->data);
        return view('billing',$query);
    }
    public function charges()
    {
        $user = User::find(Auth::user()->id);

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.stripe.com/v1/charges',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Stripe-Account:'.$user->stripe_id,
            'Authorization: Bearer '.Stripe::$apiKey,
            ),
        ));

        $response = curl_exec($curl);
        $query['myCharge'] = json_decode($response);
        $myData = $query['myCharge']->data;
        dd($query['myCharge']->data);
        return view('billing',$myData);
    }
}
