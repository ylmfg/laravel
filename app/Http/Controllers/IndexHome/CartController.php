<?php

namespace App\Http\Controllers\IndexHome;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{     //购物车列表
      public function cart(){
     	 echo "欢迎来到购物车";
     }
     //添加到购物车
      public function addCart($product_id){

      }
     //删除购物车
      public function delCart($product_id){

      }
     //结算
     public function pay(){

     }
}
