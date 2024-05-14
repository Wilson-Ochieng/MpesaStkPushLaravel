<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    //
     public function token () {

        $consumerKey= '4bA8EnRYMRKIL1M5VaDlsgaPdJjzZ8w4fbuKN0cKtMwEPu4J';
        $consumerSecret= 'yqeNAtXhiguO6U6OVXolrzCYDHBrT8LZ2YBSooIEvGazNlRxGGAijtqm2os1b8l3';
        $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $response=Http::withBasicAuth($consumerKey,$consumerSecret) -> get($url);

        return $response;




     }

      public function initiateStkPush (){



      } 



      public function stkCallback(){
        




      }
}
