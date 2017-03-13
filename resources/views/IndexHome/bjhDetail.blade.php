<!DOCTYPE html>
<html>
	<head lang="en">
	    <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width,initial-scale=1">
        <title></title>
        <script type="text/javascript" src="{{asset('/IndexHome/js/jquery-2.0.3.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('/IndexHome/css/bootstrap.min.css')}}">
       <script type="text/javascript" src="{{asset('/IndexHome/js/bootstrap.min.js')}}"></script>
       <link  href="{{asset('/IndexHome/css/app.css')}}" rel="stylesheet">
       <script type="text/javascript" src="{{asset('/layer/layer.js')}}"></script>
       <link rel="stylesheet" type="text/css" href="{{asset('/IndexHome/css/font-awesome.min.css')}}">
       <link rel="stylesheet" type="text/css" href="{{asset('/IndexHome/css/style.css')}}">
           <script type="text/javascript">

  </script>
      <style>
         .left-ft img{
           margin:30px;
         }
         .right-dt div{
          line-height: 81px;
         }
         #srcImg{
          position: relative;
          width:600px;
          height: 405px;
         }
         #srcImg i{
          position: absolute;
          width:100px;
          height: 100px;
          opacity: 0.4;
          filter:alpha(opacity=40);
          background: pink;
          cursor: pointer;
          left:0;
          top:0;
          display: none;
         }
         #thumblist li{
           float:left;
           list-style: none;
           margin:10px;
         }
         .preview-box{
          position:absolute;overflow:hidden;margin-top:30px;display:none;width: 600px;height:600px;
         }
         .preview-box img{
          position:absolute;
         }

      </style>
	</head>
  <body>
  <header class="main-header">
         <div class="container">
          <div class="row">
            <div class="col-md-12">
              <a class="branding" href="#" title="意灵魔法馆">
 <img src="{{asset('/IndexHome/images/logo.png')}}">
 <h2 class="text-hide">艺术玻璃</h2>
              </a>
            </div>
          </div>
         </div>
       </header>
     <nav class="main-navigation" >
           <div class="container">
             <div class="row">
              <div class="col-md-12">
                <div class="navbar-header">
                  <span class="nav-toggle-button collapse" data-target="#main-menu">
                    <span class="sr-only">
                      Toggle Navigation
                    </span>
                    <i class="fa fa-bars"></i>
                  </span>
                </div>
                <div class="collapse navbar-collapse" id="main-menu" style="z-index:999">
                    <ul class="menu">
                      <li class="" role="presentation">
                        <a href="{{url('/')}}">首页</a>
                      </li>
                      <li  role="presentation" class="nav-current">
                        <a href="{{url('bjh')}}">冰晶画</a>
                      </li>
                      <li  role="presentation">
                        <a href="{{url('yishuh')}}">艺术玻璃</a>
                      </li>
                      <li  role="presentation">
                        <a href="{{url('senth')}}">生态壁画</a>
                      </li>
                      <li  role="presentation" >
                        <a href="{{url('photoWall')}}">照片墙</a>
                      </li>
                      <li  role="presentation" >
                        <a href="{{url('customer')}}">客户心声</a>
                      </li>
                        <li  role="presentation" >
                       <a href="{{url('cart')}}">我的购物车<span class="badge">4</span></a>
                      </li>
                    </ul>
                </div>
              </div>
             </div>
           </div>
   </nav>
   <div class="container">
      <div class="row box">
        <div class="col-md-6">
         <div class="box">
          <div class="tb-booth tb-pic tb-s310 jqzoom" id="srcImg" width="700" height="600" >
              <img src="{{asset('../upload/images/2.jpg')}}" alt="美女" rel="{{asset('../upload/images/2-2.jpg')}}" />
              <i></i>
          </div>
          <ul class="tb-thumb" id="thumblist">
           <li class="tb-selected"  >
                <div class="tb-pic tb-s40">
                   <a href="#">
                      <img src="{{asset('../upload/images/2.jpg')}}" mid="{{asset('../upload/images/2-2.jpg')}}" big="{{asset('../upload/images/2.jpg')}}" width="80">
                   </a>
                </div>
           </li>
           <li  >
            <div class="tb-pic tb-s40">
                  <a href="#">
                     <img  src="{{asset('../upload/images/3.jpg')}}" mid="{{asset('../upload/images/3-3.jpg')}}" big="{{asset('../upload/images/3.jpg')}}" width="80">
                  </a>
              </div>
          </li>
          <li  >
            <div class="tb-pic tb-s40">
                  <a href="#">
                     <img  src="{{asset('../upload/images/4.jpg')}}" mid="{{asset('../upload/images/4-4.jpg')}}" big="{{asset('../upload/images/4.jpg')}}" width="80">
                  </a>
              </div>
          </li>
       </ul>
   </div>
</div> 
         <div class="col-md-6" style="padding-left:60px;position:relative;">
           <div class="preview-box" style=""  > 
             <img id="preview-img"  src="" > 
           </div> 
           <div class="right-dt">
             <div>标题</div>
             <div>运费</div>
             <div>
               <span>商品属性</span>
               <span></span>
             </div>
             <div>
               <span>数量</span>
               <span>swwwww</span>
             </div>
             <div>
               <span class="btn btn-warning">立即购买</span>
               <span class="btn btn-warning">加入购物车</span>
             </div>
           </div>
         </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p><b>商品描述</b></p>
          广告灯箱市场——彰显艺术效果，先声夺人 运用特殊工艺处理技术制作出来的玻璃形象牌、玻璃灯箱、大型户外玻璃广告牌等也是一种全新的商业展示手段，艺术玻璃其效果也非一般广告效果可比。为企业宣传提供新的视野，也为广告公司提供新的商业机会。立体视觉的广告玻璃镜面简直让人触手可及；呼之欲出的立体逼真感，给人们带来强烈的视觉冲击，让人流连忘返、不忍离去的广告效应。据统计，全国每年广告灯箱材料消耗近200亿元的市场容量，万人迷玻璃广告牌、广告灯箱的出现将带来新一轮的冲击波。
        </div>
      </div>
   </div>
  <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="widget">
              <h4>最新文章</h4>
              <div class="content recent-post">
                <div class="recent-single-post">
                  <a href="#" class="post-title">
                    冰晶画
                    <div class="date">2016/12/30</div>
                  </a>
                    <a href="#" class="post-title">
                    瓷砖画
                    <div class="date">2016/12/30</div>
                  </a>
                    <a href="#" class="post-title">
                    青花馆
                    <div class="date">2016/12/30</div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget">
               <h4 class="title">标签云</h4>
               <div class="content tag-cloud">
                      <a href="#">冰晶画</a>
                      <a href="#">艺术玻璃</a>
                      <a href="#">壁画</a>
                      <a href="#">养生画</a>
                      <a href="#">意灵玻艺</a>
                      <a href="#">灵感</a>
                      <a href="#">创意</a>
                      <a href="#">家具市场</a>
                      <a href="#">装饰</a>
                      <a href="#">美</a>
                      <a href="#">最新产品</a>
                      <a href="#">独具一格</a>
                      <a href="#">信誉良好</a>
                      <a href="#">放心产品</a> 
               </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget">
              <h4 class="title">合作伙伴</h4>
              <div class="content tag-cloud frend-links">
                <a href="">意灵玻艺装饰工坊</a>
                <a href="">意灵玻艺装饰工坊</a>
                <a href="">意灵玻艺装饰工坊</a>
                <a href="">意灵玻艺装饰工坊</a>
                <a href="">意灵玻艺装饰工坊</a>
                <a href="">意灵玻艺装饰工坊</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>   
  </body>

  <script>
    $(function(){

      $("#thumblist li").on('click',function(){
           var img=$(this).find('img').attr('src');
           $("#srcImg").find('img').attr('src',img);
           var mid=$(this).find('img').attr('big');
           $("#srcImg").find('img').attr('rel',mid);
      });
      $("#srcImg").mouseover(function(event){
        $("#srcImg>i").show();
        $(".preview-box").show();
         var L=event.pageX;
         var l=$(this).offset().left;
         var left=L-l-50;
         var T=event.pageY;
         var t=$(this).offset().top;
         var top=T-t-50;
         left=left<0?0:left;
         var smallw=$(this).find('img').width();
         var smallh=$(this).find('img').height();
         left=left>smallw-100?smallw-100:left;
         top=top<0?0:top;
         top=top>smallh-100?smallh-100:top;
         $("#srcImg>i").css({left:left,top:top});

         var bigw=$('.preview-box').find('img').width();
         var bigh=$('.preview-box').find('img').height();

        //图片比列
         var smallwTobig=(bigw/smallw).toFixed(2);

         var smallhTobig=(bigh/smallh).toFixed(2);
         var prevImg=$(this).find('img').attr('rel');
         $("#preview-img").attr('src',prevImg);

             var imgLeft=-(left*smallwTobig);
             var imgTop=-(top*smallhTobig);
             $("#preview-img").css({left:imgLeft,top:imgTop});
      });
      $("#srcImg").mouseout(function(){
        $("#srcImg>i").hide();
         $(".preview-box").hide();
      });
    });
  </script>
  </html>