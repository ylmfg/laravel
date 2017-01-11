<!DOCTYPE html>
<html>
	<head lang="en">
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width,initial-scale=1">
		 <title></title>
		 <link  href="{{asset('/IndexHome/css/bootstrap.min.css')}}" rel="stylesheet">
		 <link  href="{{asset('/IndexHome/css/app.css')}}" rel="stylesheet">
         <style>
         
         </style>
	</head>
    <body class="home-template">
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
                      <li class="nav-current" role="presentation">
                        <a href="{{url('/')}}">首页</a>
                      </li>
                      <li  role="presentation">
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
    <section class="content-wrap">
       <div class="container">
          <div class="row">
             <main class="col-md-8 main-content">

               @foreach($productList as $product)
                <article class="post tag-about-ghost tag-ghost-in-depth tag-zhu-shou-han-shu">
                  <div class="post-head">
                    <h1 class="post-title">
                      <a href="#">{{$product->title}}</a>
                    </h1>
                    <div class="post-meta">
                       <span class="author">
                         作者
                        <a href="#">{{$product->publisher}}</a>
                       </span>
                       <time class="date" datetime="2016/12/29">{{date('Y年m月d日',$product->uptime)}}</time>
                    </div>
                  </div>
                  <div class="post-content">
          <p>{{$product->intro}}</p>
        </div>
        <div class="post-permalink">
          <a href="{{url('detail',['product'=>$product->id])}}" class="btn btn-default">阅读全文</a>
        </div>
        <div class="footer clearfix">
           <hr>
           <div class="pull-left tag-list">
              <i class="fa fa-folder-open-o"></i>
              <a href="#" class="btn btn-success">冰晶画</a>
              <a href="#" class="btn btn-info">壁画</a>
              <a href="#" class="btn btn-primary">生态画</a>
           </div>
        </div>
          </article>
         @endforeach
          <article class="">
                 <nav>
                    <div class="list-page">
                        {{$productList->links()}}
                    </div>
                </nav>
          </article>
             </main>
             <aside class="col-md-4 sidebar">
               <div class="widget">
                    <div id="myCarousel">
                 <div id="carousel-example-generic" class="carousel slide">
             <ol class="carousel-indicators">
                 <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                  
                 </li>
                <li data-target="#carousel-example-generic" data-slide-to="1" >
                  
                 </li>
                <li data-target="#carousel-example-generic" data-slide-to="2" >
                  
                 </li>
             </ol>

             <div class="carousel-inner">
                  <div class="item active">
                    <img src="{{asset('/IndexHome/images/thumb1.jpg')}}" width="300px">
                    <div class="carousel-caption">
                      <h3>艺术玻璃</h3>
                      <p>艺术玻璃推出新品</p>
                    </div>
                  </div>
                  <div class="item ">
                    <img src="{{asset('/IndexHome/images/thumb2.jpg')}}" width="300px">
                    <div class="carousel-caption">
                      <h3>
                      冰晶画
                      </h3>
                      <p>新品类</p>
                    </div> 
                  </div>
                  <div class="item ">
                    <img src="{{asset('/IndexHome/images/thumb3.jpg')}}" width="300px">
                    <div class="carousel-caption">
                    <h3>
                      瓷砖画
                      </h3>
                      <p>瓷砖画低价了</p>
                    </div>
                  </div>
             </div>
     <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
     <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
     </a>
                 
        </div>
     </div>
               </div>
             </aside>
            <aside class="col-md-4 sidebar">
                <div class="widget">
                  <h4 class="title">意灵玻艺社区</h4>
                  <div class="content community">
                    <p>QQ:2458016159</p>
                    <p>
                      <a href="#">冰晶画社区</a>
                    </p>
                     <p>
                      <a href="#">壁画社区</a>
                    </p>
                     <p>
                      <a href="#">艺术玻璃社区</a>
                    </p>
                  </div>
                  <div class="widget">
                    <h4>关于我们</h4>
                    <div class="content download">
                       <a href="#" class="btn btn-default btn-block">
                         意灵玻艺装饰工坊
                       </a>
                    </div>
                  </div>
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
             </aside>
          </div>
       </div>
    </section>
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
     <script type="text/javascript" src="{{asset('/IndexHome/js/jquery-2.0.3.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('/IndexHome/js/bootstrap.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('/layer/layer.js')}}"></script>

    <script>
       // layer.ready(function(){ //为了layer.ext.js加载完毕再执行
       //        layer.open({
       //           title:'<div style="font-size:15px;">意灵玻艺装饰工坊</div>',
       //           type:0,
       //           content:'<div style="color:#FF6633;">欢迎来到意灵玻艺装饰工坊</div>'
       //      }); 

       //  });      
      $('.carousel').carousel({
        interval:2000
      })
     </script>
     <script type="text/javascript">
       $(function(){
         $('#main-menu .menu li').on('click',function(){
              $(this).addClass('nav-current');
              $(this).siblings().removeClass('nav-current');
         });
       })
     </script>
</html>
