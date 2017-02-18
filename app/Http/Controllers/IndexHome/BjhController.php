<?php

namespace App\Http\Controllers\IndexHome;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BjhController extends Controller
{
    public function index(){
    	//冰晶画
        $productList=DB::table('production')->where('cate_id',1)->get();
        // echo "<pre>";
        // var_dump($productList);
        // die;
        foreach($productList as $product){
        	 $product->thumb=explode('|',$product->thumb);
        }
    	return view('IndexHome/bjh',['productList'=>$productList]);
    }
    public function detail($productId){
        return view('IndexHome/bjhDetail');
    }
}
