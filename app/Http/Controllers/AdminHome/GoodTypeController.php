<?php

namespace App\Http\Controllers\AdminHome;

use Illuminate\Http\Request;
use Validator;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $goodType=DB::table('good_type')->get();
     
        return view('AdminHome\goodTypeList',['goodTypeList'=>$goodType]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('AdminHome\goodType');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data=$request->except('_token');
       // echo '<pre>';
       // var_dump($data);
        //验证规则
        $rules= [    
                      
                      'type_name'=>'required',
                ];
        //验证消息
        $message=[
                     'type_name.required'=>'名称必填!',
        ];
        //验证数据
        $validata=Validator::make($data,$rules,$message);
        if($validata->fails()){
            return back()->withErrors($validata)->withInput();
        }else{
          //新增入库
          $result=DB::table('good_type')->insertGetId(
            [
              'type_name'=>$data['type_name']
            ]
          ); 
           if($result){
               return  redirect('goodType');
           }else{
               return redirect('goodType/create');
           } 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        $goodType=DB::table('good_type')->where('type_id',$id)->first();
         
        return view('AdminHome\goodType',['goodType'=>$goodType]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
     {   
        $input=Input::get();
        $type_name=$input['type_name'];
        $type_id=$input['type_id'];
        $sql="update good_type set `type_name`='{$type_name}' where `type_id`='{$type_id}'";
        $res=DB::update($sql);
        if($res){
            $data=['error'=>1];
        }else{
            $data=['error'=>2];
         }
        echo json_encode($data);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $sql="delete from good_type where `type_id`='{$id}'";
         $res=DB::delete($sql);
         if($res){
            $data=[
              'error'=>1
            ];
         }else{
            $data=[
             'error'=>2
            ];
         }
         echo json_encode($data);
    }
}
