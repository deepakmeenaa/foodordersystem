<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orders;
class orderscontroller extends Controller
{
	public function index(){
		//return orders::all();
		//return ordersisall();
//return orders::find(2);
$data=orders::all();
echo "<pre>";
print_r($data);
//$data=orders::where('quantity', '2')->get();
 //return orders::where( 'quantity', '3')->get();
//echo "<pre>";
//print_r($data);
//for getting the data in ascending(asc) or descending order
//$data=orders::orderby( 'username', 'desc')->get();
 //for limiting the data use take function 
 //$data-orders::orderby( 'item_name', 'desc')->take(3)->get();
 //return view('orders',['data'=>$data]);
	}
	
    //
}
