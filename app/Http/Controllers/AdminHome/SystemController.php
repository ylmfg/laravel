<?php

namespace App\Http\Controllers\AdminHome;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class SystemController extends Controller
{
   public function system(){
   	  if(Session::has('user')){
   	     return view('AdminHome/system');
   	  }else{
   	  	 return redirect('admin');
   	  }
   }
}
