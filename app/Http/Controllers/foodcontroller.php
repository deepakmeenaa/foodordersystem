<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\food;
class foodcontroller extends Controller
{
	public function index(){
		//return food::all();
		//return foodisall();
//return food::find(2);
$data=food::all();
echo "<pre>";
print_r($data);
//$data=food::where('quantity', '2')->get();
 //return food::where( 'quantity', '3')->get();
//echo "<pre>";
//print_r($data);
//for getting the data in ascending(asc) or descending order
//$data=food::orderby( 'username', 'desc')->get();
 //for limiting the data use take function 
 //$data-food::orderby( 'item_name', 'desc')->take(3)->get();
 //return view('food',['data'=>$data]);
	}
	public function create()
	{
        return view('food.create');
	}
	public function store(Request $request)
	{
		
		$this->validate($request,['name'=>'required',
			'price'=>'required',
			'description'=>'required',
			'R_id'=>'required',
'images_path'=>'required',
		]);
		 $x= $request->name;
		 $y= $request->price;
		 $z= $request->description;
		 $a= $request->R_id;
		 $b= $request->images_path;
		 $post= new \App\food;
		 $post->name=$x;
		 $post->price=$y;
		 $post->description=$z;
		 $post->R_ID=$a;
		 $post->images_path=$b;
		$post->save();
		return 'success';
         
      //
	}
    //
}
