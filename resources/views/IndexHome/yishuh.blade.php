<!DOCTYPE html>
<html>
	<head lang="en">
	    <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="{{asset('/IndexHome/js/jquery-2.0.3.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('/IndexHome/css/bootstrap.min.css')}}">
       <script type="text/javascript" src="{{asset('/IndexHome/js/bootstrap.min.js')}}"></script>
       <script src="{{asset('/IndexHome/js/jcMarquee.js')}}" type="text/javascript"></script>
       <link  href="{{asset('/IndexHome/css/app.css')}}" rel="stylesheet">
       <script type="text/javascript" src="{{asset('/layer/layer.js')}}"></script>
      <style>
      .price{
        font-size:18px;
      }
      .currentPrice{
        color:red;
      }
      #Marquee_x { overflow:hidden; width:100% } 
      #Marquee_x ul li ,#Marquee_x ul li div{ float:left;line-height:25px;overflow:hidden} /* 横向滚动必须让所有li左浮动 */
      #Marquee_x ul li div{ float:left;line-height:25px;height:100%; width:180px; overflow:hidden}
      #Marquee_x ul li div img{ border:1px solid #DADADA; width:100%; display:block}
      #Marquee_x ul li div span{ display:block;}
      </style>
      <script>
 $(function(){
    $('#Marquee_x').jcMarquee({ 'marquee':'x','margin_right':'10px','speed':20 });
  // DIVCSS5提示：10px代表间距，第二个20代表滚动速度
});
</script>
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
     <nav class="main-navigation">
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
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="menu">
                      <li class="" role="presentation">
                        <a href="{{url('/')}}">首页</a>
                      </li>
                      <li  role="presentation">
                        <a href="{{url('bjh')}}">冰晶画</a>
                      </li>
                      <li  role="presentation" class="nav-current">
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
      <div class="row">
         <div class="col-md-12" id="Marquee_x">
           <!--焦点图-->
           <ul>
            <li>
                <div>
                    <a href="{{url('/')}}" target="_blank">
                       <img src="{{asset('/IndexHome/images/thumb1.jpg')}}" />
                       <span class="text-center">意灵玻艺装饰工坊</span>
                    </a>
                </div>
                <div>
                    <a href="{{url('/')}}" target="_blank">
                       <img src="{{asset('/IndexHome/images/thumb2.jpg')}}" />
                       <span class="text-center">意灵玻艺装饰工坊</span>
                    </a>
                </div>
              <div>
                    <a href="{{url('/')}}" target="_blank">
                       <img src="{{asset('/IndexHome/images/thumb3.jpg')}}" />
                       <span class="text-center">意灵玻艺装饰工坊</span>
                    </a>
                </div>
                <div>
                    <a href="{{url('/')}}" target="_blank">
                       <img src="{{asset('/IndexHome/images/thumb4.jpg')}}" />
                       <span class="text-center">意灵玻艺装饰工坊</span>
                    </a>
                </div>
              <div>
                    <a href="{{url('/')}}" target="_blank">
                       <img src="{{asset('/IndexHome/images/thumb5.jpg')}}" />
                       <span class="text-center">意灵玻艺装饰工坊</span>
                    </a>
                </div>
                <div>
                    <a href="{{url('/')}}" target="_blank">
                       <img src="{{asset('/IndexHome/images/thumb6.jpg')}}" />
                       <span class="text-center">意灵玻艺装饰工坊</span>
                    </a>
                </div>
              <div>
                    <a href="{{url('/')}}" target="_blank">
                       <img src="{{asset('/IndexHome/images/thumb7.jpg')}}" />
                       <span class="text-center">意灵玻艺装饰工坊</span>
                    </a>
                </div>
                <div>
                    <a href="{{url('/')}}" target="_blank">
                       <img src="{{asset('/IndexHome/images/thumb8.jpg')}}" />
                       <span class="text-center">意灵玻艺装饰工坊</span>
                    </a>
                </div>
                <div>
                    <a href="{{url('/')}}" target="_blank">
                       <img src="{{asset('/IndexHome/images/thumb9.jpg')}}" />
                       <span class="text-center">意灵玻艺装饰工坊</span>
                    </a>
                </div>
                <div>
                    <a href="{{url('/')}}" target="_blank">
                       <img src="{{asset('/IndexHome/images/thumb10.jpg')}}" />
                       <span class="text-center">意灵玻艺装饰工坊</span>
                    </a>
                </div>
                <div>
                    <a href="{{url('/')}}" target="_blank">
                       <img src="{{asset('/IndexHome/images/thumb11.jpg')}}" />
                       <span class="text-center">意灵玻艺装饰工坊</span>
                    </a>
                </div>
                 <div>
                    <a href="{{url('/')}}" target="_blank">
                       <img src="{{asset('/IndexHome/images/thumb12.jpg')}}" />
                       <span class="text-center">意灵玻艺装饰工坊</span>
                    </a>
                </div>
            </li>
        </ul>
         </div>
      </div>
      <div class="row">
          <div class="col-md-7 thumbnail">
            <img src="{{asset('/IndexHome/images/thumb3.jpg')}}"  width="80%" >
          </div>
          <div class="col-md-5">
            <h2>广告灯箱市场——彰显艺术效果，先声夺人</h2>
             <p><span class="label label-success">广告灯箱市场——彰显艺术效果，先声夺人</span>
运用特殊工艺处理技术制作出来的玻璃形象牌、玻璃灯箱、大型户外玻璃广告牌等也是一种全新的商业展示手段，艺术玻璃其效果也非一般广告效果可比。为企业宣传提供新的视野，也为广告公司提供新的商业机会。立体视觉的广告玻璃镜面简直让人触手可及；呼之欲出的立体逼真感，给人们带来强烈的视觉冲击，让人流连忘返、不忍离去的广告效应。据统计，全国每年广告灯箱材料消耗近200亿元的市场容量，万人迷玻璃广告牌、广告灯箱的出现将带来新一轮的冲击波。
      </p>
        <div class="price">
            <del class="originalPrice">原价￥:55:00</del>
            <b class="currentPrice">现价￥:55:00</b>
         </div>
         <a class="btn btn-info" href="#">查看详情</a>
          <a class="btn btn-warning" href="#">加入购物车</a>
          </div>
      </div>
            <div class="row">
          <div class="col-md-7 thumbnail">
            <img src="{{asset('/IndexHome/images/thumb2.jpg')}}"  width="80%">
          </div>
          <div class="col-md-5">
            <h2>广告灯箱市场——彰显艺术效果，先声夺人</h2>
             <p><span class="label label-success">广告灯箱市场——彰显艺术效果，先声夺人</span>
运用特殊工艺处理技术制作出来的玻璃形象牌、玻璃灯箱、大型户外玻璃广告牌等也是一种全新的商业展示手段，艺术玻璃其效果也非一般广告效果可比。为企业宣传提供新的视野，也为广告公司提供新的商业机会。立体视觉的广告玻璃镜面简直让人触手可及；呼之欲出的立体逼真感，给人们带来强烈的视觉冲击，让人流连忘返、不忍离去的广告效应。据统计，全国每年广告灯箱材料消耗近200亿元的市场容量，万人迷玻璃广告牌、广告灯箱的出现将带来新一轮的冲击波。
      </p>
         <div class="price">
            <del class="originalPrice">原价￥:55:00</del>
            <b class="currentPrice">现价￥:55:00</b>
         </div>
         <a class="btn btn-info" href="#">查看详情</a>
          <a class="btn btn-warning" href="#">加入购物车</a>
          </div>
      </div>
          <div class="row">
          <div class="col-md-7 thumbnail">
            <img src="{{asset('/IndexHome/images/thumb4.jpg')}}" width="80%">
          </div>
          <div class="col-md-5">
            <h2>广告灯箱市场——彰显艺术效果，先声夺人</h2>
             <p><span class="label label-success">广告灯箱市场——彰显艺术效果，先声夺人</span>
运用特殊工艺处理技术制作出来的玻璃形象牌、玻璃灯箱、大型户外玻璃广告牌等也是一种全新的商业展示手段，艺术玻璃其效果也非一般广告效果可比。为企业宣传提供新的视野，也为广告公司提供新的商业机会。立体视觉的广告玻璃镜面简直让人触手可及；呼之欲出的立体逼真感，给人们带来强烈的视觉冲击，让人流连忘返、不忍离去的广告效应。据统计，全国每年广告灯箱材料消耗近200亿元的市场容量，万人迷玻璃广告牌、广告灯箱的出现将带来新一轮的冲击波。
      </p>
         <div class="price">
            <del class="originalPrice">原价￥:55:00</del>
            <b class="currentPrice">现价￥:55:00</b>
         </div>
         <a class="btn btn-info" href="#">查看详情</a>
         <a class="btn btn-warning" href="">加入购物车</a>
          </div>
      </div>
      <div class="row">
        <nav class="text-center">
            <ul class="pagination">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
       </nav>
      </div>
   </div>

   </body>
      @include('IndexHome.footer')
   </html>