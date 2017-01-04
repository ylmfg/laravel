<?php

namespace App\Http\Controllers\AdminHome;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class ZuoPingController extends Controller
{
    public function zuoping(){
    	if(Session::has('user')){
    	  return view('AdminHome/design');	
    	}else{
    	  return redirect('admin');
    	}
    }
    public function insert(){
    	if(Session::has('user')){
    	  return view('AdminHome/insert');
    	}else{
    	  return redirect('admin');
    	}
    }
}
