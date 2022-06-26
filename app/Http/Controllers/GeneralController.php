<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Facade\FlareClient\Http\Client;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToArray;
use Stripe\OAuth;
use Stripe\Stripe;
use Stripe\StripeClient;

class GeneralController extends Controller
{
    // const BASE_URL = 'https://connect.stripe.com/oauth/authorize';
    // const BASE_URL = 'https://connect.stripe.com';
    const SECRET_KEY = 'sk_test_51LEqhtHz1quptUQybH9Pg5Yi1PEOMKzPcGMA2M5r0bnBR0MxjE9d3PMGxohKiD3KPqWTsozzk5Ye0z6vq9MGKgiD00NU4FmOi7';
    const PUBLISH_KEY = 'pk_test_51LEqhtHz1quptUQyosCXRvOtRBDQkGg1ejApkPXeuiF5De4I8jeb1AbaLm6idWbASY4bCsToEre0Gj5ylEi2kVuv00xRy8u5V6';

    public function frontpage()
    {
        $query['services']= Package::all();
        return view('home',$query);
    }

    public function stripeconnect()
    {
        $user = Auth::user();
        //------ Create Connect to Stripe --------//

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.stripe.com/v1/accounts',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'type=express&email='.$user->email.'&country=US',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.self::SECRET_KEY,
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $accountresponse = curl_exec($curl);
        $account = json_decode($accountresponse);


        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.stripe.com/v1/accounts/'.$account->id,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer sk_test_51LEqhtHz1quptUQybH9Pg5Yi1PEOMKzPcGMA2M5r0bnBR0MxjE9d3PMGxohKiD3KPqWTsozzk5Ye0z6vq9MGKgiD00NU4FmOi7'
          ),
        ));

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.stripe.com/v1/account_links',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'account='.$account->id.'&type=account_onboarding&return_url=http%3A%2F%2Flocalhost%2Fjs_saas%2F&refresh_url=http%3A%2F%2Flocalhost%2Fjs_saas%2F',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer sk_test_51LEqhtHz1quptUQybH9Pg5Yi1PEOMKzPcGMA2M5r0bnBR0MxjE9d3PMGxohKiD3KPqWTsozzk5Ye0z6vq9MGKgiD00NU4FmOi7',
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $response = curl_exec($curl);
        // dd(json_decode($response)->error->message);
        $myResponse = json_decode($response);
        if(isset($myResponse->error->message)){
            $query['clientMSG'] = json_decode($response)->error->message;
            return view('billing',$query);
        }

        if(isset($myResponse->url)){
            $query['clientURL'] = json_decode($response)->url;
            return redirect($query['clientURL']);
        }

        // dd($clientURL);
    }

}
