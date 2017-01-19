<?php

namespace App\Http\Controllers\Common;
// require 'vendor/autoload.php';
// use Intervention\Image\ImageManagerStatic as Image;
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
            $filePath='upload/'.$newName;
            $thumbPath='thumb/'.$newName;
            //制作缩略图

            //Image::configure(array('driver' => 'imagick'));
            $img = Image::make($filePath)->resize(300, 200);
                   die('ok');
            
            $img->save(base_path().'/'.$thumbPath);
            return $filePath;
        }
    }

}
