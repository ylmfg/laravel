<?php

namespace App\Http\Controllers\IndexHome;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexHomeController extends Controller
{
   public function index(){
      $productList=DB::table('production')->paginate(3);;
   	return view('IndexHome/index',['productList'=>$productList]);
   }
   public function photoWall(){
   	return view('IndexHome/photoWall');
   }
   public function customer(){
   	return view('IndexHome/customer');
   }
   public function cart(){
   	 echo "欢迎来到购物车";
   }
   public function detail($productId){
      $product=DB::table('production')->find($productId);
      return view('IndexHome/detail',['product'=>$product]);
   }
}
