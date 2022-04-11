<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $r = $this->getApi();
        //print_r($r);
        return view('home',['usersApi'=>$r]);
    }

    public function getApi(){
        $url = 'https://api.github.com/users';
        $agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
        $authorization = "your_username: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"; // Prepare the authorisation token
       
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_USERAGENT, $agent);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1) ;
        curl_setopt( $curl, CURLOPT_USERPWD, $authorization);
        curl_exec($curl);
        $result=curl_exec($curl);
        curl_close($curl);

        return json_decode( $result );
    }
}
