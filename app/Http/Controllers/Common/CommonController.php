<?php

namespace App\Http\Controllers\Common;
use Intervention\Image\ImageManager;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
   //文章缩略图上传
    public function upload(){
        $file=Input::file('Filedata');
        if($file->isValid()){
            $entension = $file -> getClientOriginalExtension();//获取图片的格式
            $newName=date('YmdHis').mt_rand(100,999).'.'.$entension;
            $path=$file->move(base_path().'/upload',$newName);//文件存储地址
            $filePath='/upload/'.$newName;
            //require '/vendor/autoload.php';
              // $thumbPath='/upload/thumb/';
            // //Image::configure(array('driver' => 'imagick'));
            // $watermark='/upload/water/watermark.png';
            // $img = Image::make($filePath)->resize(320, 240)->insert($watermark);
            // $img->save($thumbPath);

            return $filePath;
        }
    }

}
