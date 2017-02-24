<?php

namespace App\Http\Controllers\AdminHome;

use Illuminate\Http\Request;
use Validator;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
         $goodType=DB::table('good_type')->get();
         return view('AdminHome/insertAttribute',['goodType'=>$goodType]);
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
        //验证规则
        $rules= [      
                      'type_id' =>'required',
                      'attr_name'=>'required',
                      'attr_type'=>'required',
                      'attr_input_type'=>'required'
                ];
        //验证消息
        $message=[   
                     'type_id.required'=>'商品类型必选',
                     'attr_name.required'=>'名称必填!',
                     'attr_type.required'=>'商品属性可选值必选',
                     'attr_input_type.required'=>'商品属性输入类型必选'
        ];
        //验证
        $validata=validator:: make($data,$rules,$message);
        if($validata->fails())return back()->withErrors($validata)->withInput();
        //新增入库
        $res=DB::table('attribute')->insertGetId(
         [
           'type_id'=>$data['type_id'],
            'attr_name'=>$data['attr_name'],
            'attr_type'=>$data['attr_type'],
            'attr_input_type'=>$data['attr_input_type']
        ]);
        if($res){
            return redirect('goodType');
        }else{
            return redirect('attribute/create');
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
        $attributeList=DB::table('attribute')->where('type_id',$id)->paginate(10);

        return view('AdminHome/attributeList',['attributeList'=>$attributeList]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
       $goodType=DB::table('good_type')->get();
       $attributeList=DB::table('attribute')->where('attr_id',$id)->first();
       return view('AdminHome/insertAttribute',['attribute'=>$attributeList,'goodType'=>$goodType]);
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
        //

         $data=$request->except('_token');
         $attr_name=$data['attr_name'];
         $attr_type=$data['attr_type'];
         $attr_input_type=$data['attr_input_type'];
         $attr_value=$data['attr_value'];
          //验证规则
        $rules= [      
                      'type_id' =>'required',
                      'attr_name'=>'required',
                      'attr_type'=>'required',
                      'attr_input_type'=>'required'
                ];
        //验证消息
        $message=[   
                     'type_id.required'=>'商品类型必选',
                     'attr_name.required'=>'名称必填!',
                     'attr_type.required'=>'商品属性可选值必选',
                     'attr_input_type.required'=>'商品属性输入类型必选'
        ];

            
        //验证
        $validata=validator:: make($data,$rules,$message);

        $sql="update `attribute` set `attr_name`='{$attr_name}',`attr_type`='{$attr_type}',`attr_input_type`='{$attr_input_type}',`attr_value`='{$attr_value}'where `attr_id`='{$id}'";
        $res=DB::update($sql);
              
       if($res){
            $data=['error'=>1];
        }else{
            $data=['error'=>2];
        }
        echo json_encode($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sql="delete from attribute where `attr_id`='{$id}'";
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
