<?php

namespace App\Http\Controllers\IndexHome;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{     //购物车列表
      public function cart(){
     	   return view('IndexHome/cart');
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

// SELECT 
//   SUM(donation_amount) AS total_amount,
//   COUNT(DISTINCT uid) num
// FROM
//   wp_donation_records 
// WHERE virtual_data = 1 
//   AND order_status = 1 
//   AND donation_time > 1489014000 ;