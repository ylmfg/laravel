<?php

namespace App\Http\Controllers\AdminHome;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
class AdminHomeController extends Controller
{   
	public function index(){
       if(Session::has('user')){
           return view('AdminHome/index');
       }else{
           return redirect('admin');
       }
	}
    public function admin(){
    	return view('AdminHome/login');
    }
    public function login(){
    	$data=Input::get();
        $user=DB::table('users')->where('id',1)->first();
        if($user->name==$data['username']){
        	if($user->password==$data['pwd']){
               session()->put('user',$data['username']);
        		return redirect('index');
        	}else{
        		return redirect('admin');
        	}
        }else{
        	return redirect('admin');
        }
    }
   public function loginout(){
      session()->flush('user');
      return redirect('admin');
   }

}
