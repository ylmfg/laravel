<?php

namespace App\Http\Controllers\IndexHome;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexHomeController extends Controller
{
   public function index(){
   	return view('IndexHome/index');
   }
   public function photoWall(){
   	return view('IndexHome/photoWall');
   }
   public function customer(){
   	return view('IndexHome/customer');
   }
}
