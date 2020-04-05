<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $req)
    {
    	
    	//print_r($req); 
    	          //output will be int the form of url
    	print_r($req->input());  //the output will be array()
        //echo $req->url();          //to find the path of url
        //echo $req->fullurl();      //will give all the url with data which we have passed
        //echo $req->path();           //if we want to check the path and output is =user
        //echo $req->method();         //to get the name of the method
    }
}