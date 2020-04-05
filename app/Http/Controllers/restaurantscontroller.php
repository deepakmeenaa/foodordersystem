<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\restaurants;
class restaurantscontroller extends Controller
{
	public function index(){
		//return restaurants::all();
		//return restaurantsisall();
//return restaurants::find(2);
$data=restaurants::all();
echo "<pre>";
print_r($data);
//$data=restaurants::where('quantity', '2')->get();
 //return restaurants::where( 'quantity', '3')->get();
//echo "<pre>";
//print_r($data);
//for getting the data in ascending(asc) or descending order
//$data=restaurants::orderby( 'username', 'desc')->get();
 //for limiting the data use take function 
 //$data-restaurants::orderby( 'item_name', 'desc')->take(3)->get();
 //return view('restaurants',['data'=>$data]);
	}
	public function create()
	{
        return view('restaurants.create');
	}
	public function store(Request $request)
	{
		
		$this->validate($request,['name'=>'required',
			'email'=>'required',
'contact'=>'required',
'address'=>'required',
'M_ID'=>'required',
		]);
		 $x= $request->name;
		 $y= $request->email;
		 $z= $request->contact;
		 $a= $request->address;
		 $b= $request->M_ID;
		 $post= new \App\restaurants;
		 $post->name=$x;
		 $post->email=$y;
		 $post->contact=$z;
		 $post->address=$a;
		 $post->M_ID=$b;
		$post->save();
		return 'success';
         
      //
	}
    //
}
