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
    function img_create_small($big_img, $width, $height, $small_img) {//原始大图地址，缩略图宽度，高度，缩略图地址
            $imgage = getimagesize($big_img); //得到原始大图片
            switch ($imgage[2]) { // 图像类型判断
            case 1:
            $im = imagecreatefromgif($big_img);
            break;
            case 2:
            $im = imagecreatefromjpeg($big_img);
            break;
            case 3:
            $im = imagecreatefrompng($big_img);
            break;
            }
            $src_W = $imgage[0]; //获取大图片宽度
            $src_H = $imgage[1]; //获取大图片高度
            $tn = imagecreatetruecolor($width, $height); //创建缩略图
            imagecopyresampled($tn, $im, 0, 0, 0, 0, $width, $height, $src_W, $src_H); //复制图像并改变大小
            imagejpeg($tn, $small_img); //输出图像
    }

}
