<?php

namespace App\Http\Controllers\AdminHome;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function category(){
    	if(Session::has('user')){
    	     return view('AdminHome/category'); 		
    	}else{
    		 return redirect('admin');
    	}
    }
    public function insertCate(){
    	if(Session::has('user')){
    		return view('AdminHome/insertCate');
    	}else{
    		return redirect('admin');
    	}
   
    }
    public function cateProccess(){
       $data=Input::get();
       echo "<pre>";
       var_dump($data);
     }
}
