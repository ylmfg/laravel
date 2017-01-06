<?php

namespace App\Http\Controllers\AdminHome;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
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
    //新增数据
    public function insertProccess(Request $request){
        $validate=Validator::make($request->except('_token'),[
              'title'=>'required',
              'price'=>'required',
            ]);
        if($validate->fails()){
            return redirect('insert')->withErrors($validate)->withInput();
        }
    }
}
