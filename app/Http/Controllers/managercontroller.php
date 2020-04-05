<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\manager;
class managercontroller extends Controller
{
	public function index(){
		//return manager::all();
		//return managerisall();
//return manager::find(2);
$data=manager::all();
echo "<pre>";
print_r($data);
//$data=manager::where('quantity', '2')->get();
 //return manager::where( 'quantity', '3')->get();
//echo "<pre>";
//print_r($data);
//for getting the data in ascending(asc) or descending order
//$data=manager::orderby( 'username', 'desc')->get();
 //for limiting the data use take function 
 //$data-manager::orderby( 'item_name', 'desc')->take(3)->get();
 //return view('manager',['data'=>$data]);
	}
	public function create()
	{
        return view('manager.create');
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
		 $post= new \App\manager;
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
