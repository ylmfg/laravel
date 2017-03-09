<?php

namespace App\Http\Controllers\IndexHome;

use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class IndexHomeController extends Controller
{  
   public function index(){
      $userData=Auth::user();
      $productList=DB::table('production')->paginate(2);
      
      foreach($productList as $product){
         $product->keyword=explode(',',$product->keyword);
      }
   	return view('IndexHome/index',['productList'=>$productList,'userData'=>$userData]);
   }
   public function photoWall(){
   	return view('IndexHome/photoWall');
   }
   public function customer(){
     $i=1;
     while($i<10){
      if($i==5){
         $i++;
         continue;
      }
       ++$i;
      echo $i."\n";
     }
   }
   public function detail($productId){
      $product=DB::table('production')->find($productId);
      return view('IndexHome/detail',['product'=>$product]);
   }
   public function pageArticle(){
      $data=Input::all();
      $page=$data['page'];
      $num=1;
      $offset=($page-1)*$num;
      $count=DB::table('production')->count();//获取总共的记录数;
      $pageNum=ceil($count/$num);//总的页码数
      $productList['list']=DB::table('production')->forPage($offset,$num)->get();
   
      $productList['pageNum']=$pageNum;
      echo json_encode($productList);
   }

}
