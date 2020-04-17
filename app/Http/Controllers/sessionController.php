<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    function session(Request $request){

    //print_r($request->input('name'));
    $user=$request->input();

    $request->session()->put('data',$user);          // put data into session variable

        //print_r();
        $output=$request->session()->get('data');    // retrieve data into a variable
        if($output['name']=='anurag'){

            return view('pages.homepage');
        // echo"Session Created successfully";
         $request->session()->flush();               // destroy session variable 
        }
        else{

            return view('form')->with('errror','error in ');

            // echo"Session not Created ";
        }
        

       // print_r($output);
    }
}





