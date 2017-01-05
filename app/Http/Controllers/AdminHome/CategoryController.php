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
    		 //获取分类数据
    		 $data=DB::table('category')->get();
    	     return view('AdminHome/category',['cateList'=>$data]); 		
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
       if(isset($data['cate_id'])){
           $result=DB::table('category')
                  ->where('cate_id',$data['cate_id'])
                  ->update(['title'=>$data['title'],'time'=>time()]);
           if($result){
           	 return redirect('category');
           }else{
             return redirect('editCate',['cateId'=>$data['cate_id']]);
           } 	
       }else{
	       	 $id = DB::table('category')->insertGetId(
	       ['title' =>$data['title'], 'time' =>time()]
	        );
	       if($id){
	       	   return redirect('category');	
	       }else{
               return redirect('insertCate');
	       }
       }
      
     }
    public function editCate($cateId){
      $data=DB::table('category')->where('cate_id',$cateId)->first();
      return view('AdminHome/editCate',['cateList'=>$data]);
    }
    public function delCate($cateId){
      $ids=explode(',',$cateId);
      // echo "<pre>";
      // var_dump($ids);
      // die;
      if(isset($ids)){
      	 DB::table('category')->whereIn('cate_id',$ids)->delete();
      }
      return redirect('category');
    }
}
