<?php

namespace App\Http\Controllers\IndexHome;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexHomeController extends Controller
{  
   public function index(){
      $userData=Auth::user();
      $productList=DB::table('production')->paginate(3);

      foreach($productList as $product){
         $product->keyword=explode(',',$product->keyword);
      }
   	return view('IndexHome/index',['productList'=>$productList,'userData'=>$userData]);
   }
   public function photoWall(){
   	return view('IndexHome/photoWall');
   }
   public function customer(){
   	return view('IndexHome/customer');
   }
   public function detail($productId){
      $product=DB::table('production')->find($productId);
      return view('IndexHome/detail',['product'=>$product]);
   }
}
