<?php

namespace App\Http\Controllers\IndexHome;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SenthController extends Controller
{
    //
    public function index(){
    	return view('IndexHome/senth');
    }
}
