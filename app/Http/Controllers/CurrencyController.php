<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use Response;
use DB;


class CurrencyController extends Controller
{
    //
    public function getCurrencyConvert(){

       // $_SERVER['REQUEST_URI']
        
        
 //$url = "https://free.currconv.com/api/v7/convert?q=USD_PHP&compact=ultra&apiKey=e274307d1bef83e61f0d";
 $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://free.currconv.com/api/v7/convert?q=USD_KES&compact=ultra&apiKey=e274307d1bef83e61f0d",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$response = json_decode($response, true); 

var_dump($response);
die();
$err = curl_error($curl);

curl_close($curl);
        

        return view('merchant.index');
    
    }
}
