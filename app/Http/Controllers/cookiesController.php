<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class cookiesController extends Controller
{
    public function setcookies(Request $request){

        $minutes=10;
        $response= new Response('hello world');
        $response->withCookie(cookie('mycookie','Anurag singh',$minutes));
        return $response;
    }

    public function getcookies(Request $request){
        $value=$request->cookie('name');
        echo $value;
    }

}


