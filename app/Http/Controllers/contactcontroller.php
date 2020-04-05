<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
class contactcontroller extends Controller
{
	public function index(){
		//return contact::all();
		//return contactisall();
//return contact::find(2);
$data=contact::all();
echo "<pre>";
print_r($data);
//$data=contact::where('quantity', '2')->get();
 //return contact::where( 'quantity', '3')->get();
//echo "<pre>";
//print_r($data);
//for getting the data in ascending(asc) or descending order
//$data=contact::orderby( 'username', 'desc')->get();
 //for limiting the data use take function 
 //$data-contact::orderby( 'item_name', 'desc')->take(3)->get();
 //return view('contact',['data'=>$data]);
	}
	public function create()
	{
        return view('contact.create');
	}
	public function store(Request $request)
	{
		
		$this->validate($request,['Name'=>'required',
			'Email'=>'required',
'Mobile'=>'required',
'Subject'=>'required',
'Message'=>'required',
		]);
		 $x= $request->Name;
		 $y= $request->Email;
		 $z= $request->Mobile;
		 $a= $request->Subject;
		 $b= $request->Message;
		 $post= new \App\contact;
		 $post->Name=$x;
		 $post->Email=$y;
		 $post->Mobile=$z;
		 $post->Subject=$a;
		 $post->Message=$b;
		$post->save();
		return 'success';
         
      //
	}
    //
}
