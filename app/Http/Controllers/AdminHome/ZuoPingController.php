<?php

namespace App\Http\Controllers\AdminHome;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class ZuoPingController extends Controller
{
    public function zuoping(){
    	if(Session::has('user')){
          $data=DB::table('category')->get();
    	  return view('AdminHome/design',['cateList'=>$data]);	
    	}else{
    	  return redirect('admin');
    	}
    }
    public function insert(){
    	if(Session::has('user')){
        $data=DB::table('category')->get();
    	  return view('AdminHome/insert',['cateList'=>$data]);
    	}else{
    	  return redirect('admin');
    	}
    }
}
