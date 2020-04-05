<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
class customercontroller extends Controller
{
	public function index(){
		//return customer::all();
		//return customerisall();
//return Customer::find(2);
$data=customer::all();
echo "<pre>";
print_r($data);
//$data=customer::where('quantity', '2')->get();
 //return customer::where( 'quantity', '3')->get();
//echo "<pre>";
//print_r($data);
//for getting the data in ascending(asc) or descending order
//$data=customer::orderby( 'username', 'desc')->get();
 //for limiting the data use take function 
 //$data-customer::orderby( 'item_name', 'desc')->take(3)->get();
 //return view('customer',['data'=>$data]);
	}
	public function create()
	{
        return view('customer.create');
	}
	public function store(Request $request)
	{
		
		$this->validate($request,['username'=>'required',
			'fullname'=>'required',
'email'=>'required',
'contact'=>'required',
'address'=>'required',
'password'=>'required'
		]);
		 $x= $request->username;
		 $y= $request->fullname;
		 $z= $request->email;
		 $a= $request->contact;
		 $b= $request->address;
		 $c= $request->password;
		 $post= new \App\customer;
		 $post->username=$x;
		 $post->fullname=$y;
		 $post->email=$z;
		 $post->contact=$a;
		 $post->address=$b;
		 $post->password=$c;
		$post->save();
		return 'success';
         
      //
	}
    //
}
