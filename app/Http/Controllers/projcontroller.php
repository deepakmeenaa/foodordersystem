<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class projcontroller extends Controller
{
   public function pl(){
    	$user=DB::select('select * from contact');
    	print_r($user); //
}
}