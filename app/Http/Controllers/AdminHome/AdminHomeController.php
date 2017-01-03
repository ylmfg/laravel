<?php

namespace App\Http\Controllers\AdminHome;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    public function admin(){
    	return view('AdminHome/login');
    }
}
