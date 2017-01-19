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
    public function zuoping($cateId=null){
    	if(Session::has('user')){
          if(isset($cateId)){
                 $productList=DB::table('production')
                  ->orderBy('production.cate_id','desc')
                  ->leftJoin('category','production.cate_id','=','category.cate_id')
                  ->select('production.*','category.title as cate_title')
                  ->where('production.cate_id','=',$cateId)
                  ->paginate(5);
          }else{
                 $productList=DB::table('production')
                  ->orderBy('production.cate_id','desc')
                  ->leftJoin('category','production.cate_id','=','category.cate_id')
                  ->select('production.*','category.title as cate_title')
                  ->paginate(5);
          }
          $cateList=DB::table('category')->get();
         foreach($productList as $product){
            $product->thumb=explode('|', $product->thumb);
         }
    	  return view('AdminHome/design',['cateList'=>$cateList,'productList'=>$productList,'cateId'=>$cateId]);	
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
    //数据处理
    public function insertProccess(Request $request){
        //验证规则
        $rules= [    
                      'cate_id'=>'required',
                      'title'=>'required',
                      'old_price'=>'required|numeric',
                      'keyword'=>'required',
                      'thumb'=>'required',
                      'intro'=>'required',
                      'content'=>'required'   
                ];
        //验证消息
        $message=[
                     'cate_id.required'=>'分类必填!',
                     'title.required'=>'标题必填!',
                     'old_price.required'=>'价格必填!',
                     'old_price.numeric'=>'价格必须是数字',
                     'keyword.required'=>'关键字必填!',
                     'thumb.required'=>'图片必选!',
                     'intro.required'=>'简介必填',
                     'content.required'=>'内容必填!'
        ];
        //接受数据
        $data=$request->except('_token');
        if(empty($data['current_price'])){
            $data['current_price']=null;
        }
        $data['thumb']=implode('|',$data['thumb']);
        $data['keyword']=str_replace('，',',',$data['keyword']);
        //验证数据
        $validate=Validator::make($data,$rules,$message);
        if($validate->fails()){
            return back()->withErrors($validate)->withInput();
        }else{
           //入库
            if(isset($data['id'])){
             //更新
               $result=DB::table('production')
                  ->where('id',$data['id'])
                  ->update(
                    [
                    'title'=>$data['title'],
                    'current_price'=>$data['current_price'],
                    'keyword'=>$data['keyword'],
                    'thumb'=>$data['thumb'],
                    'intro'=>$data['intro'],
                    'content'=>$data['content'],
                    'uptime'=>time(),
                    ]);
                   if($result){
                     return redirect('zuoping');
                   }else{
                     return redirect('editProduct',['productId'=>$data['id']]);
                   }       
            }else{
                //新增
               $id=DB::table('production')->insertGetId(
              [
              'cate_id'=>$data['cate_id'],
              'title'=>$data['title'],
              'old_price'=>$data['old_price'],
              'keyword'=>$data['keyword'],
              'thumb'=>$data['thumb'],
              'intro'=>$data['intro'],
              'content'=>$data['content'],
              'uptime'=>time(),
              'status'=>0,
              'publisher'=>'意灵玻艺术装饰工坊'
              ]);
                if($id){
                    return redirect('zuoping');
                }else{
                    return redirect('insert');
                } 
            }
            
        }
    }
    //编辑产品
    public function editProduct($productId){
         $cateList=DB::table('category')->get();
         $productList=DB::table('production')->where('id',$productId)->first();
         $productList->thumb=explode('|',$productList->thumb);
        return view('AdminHome/editProduct',['cateList'=>$cateList,'productList'=>$productList]);
    }
}