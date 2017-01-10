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
       <script type="text/javascript" src="{{asset('/layui/layui.js')}}"></script>
       <link href="{{asset('/layui/css/layui.css')}}" rel="stylesheet">
      <style>
        [class*='col-md']{
          margin-top:10px;
        }
       #LAY_demo1{
         list-style: none;
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
                      <li  role="presentation">
                        <a href="{{url('yishuh')}}">艺术玻璃</a>
                      </li>
                      <li  role="presentation" class="nav-current">
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
      <ul class="flow-default" id="LAY_demo1">
            <li class="col-md-4 col-xs-4">
              <img src="{{asset('/IndexHome/images/thumb3.jpg')}}" width="98%">
            </li>
            <li class="col-md-4 col-xs-4">
              <img src="{{asset('/IndexHome/images/thumb2.jpg')}}" width="98%">
            </li>
              <li class="col-md-4 col-xs-4">
              <img src="{{asset('/IndexHome/images/thumb1.jpg')}}" width="98%">
            </li>
            <li class="col-md-4 col-xs-4">
              <img src="{{asset('/IndexHome/images/thumb3.jpg')}}" width="98%">
            </li>
            <li class="col-md-4 col-xs-4">
              <img src="{{asset('/IndexHome/images/thumb2.jpg')}}" width="98%">
            </li>
              <li class="col-md-4 col-xs-4">
              <img src="{{asset('/IndexHome/images/thumb1.jpg')}}" width="98%">
            </li>
            <li class="col-md-4 col-xs-4">
              <img src="{{asset('/IndexHome/images/thumb3.jpg')}}" width="98%">
            </li>
            <li class="col-md-4 col-xs-4">
              <img src="{{asset('/IndexHome/images/thumb2.jpg')}}" width="98%">
            </li>
              <li class="col-md-4 col-xs-4">
              <img src="{{asset('/IndexHome/images/thumb1.jpg')}}" width="98%">
            </li>
        </ul>
    </div>
   </body>
   <script type="text/javascript">
   layui.use('flow', function(){
       var flow = layui.flow;
      flow.load({
    elem: '#LAY_demo1' //流加载容器
   //滚动条所在元素，一般不用填，此处只是演示需要。
    ,done: function(page, next){ //执行下一页的回调
      page=1;
      //模拟数据插入
      setTimeout(function(){
        var lis = [];
        for(var i = 0; i < 3; i++){
          var param='http://'+location.host+'/public/IndexHome/images/thumb'+( (page-1)*3 + i + 1 )+'.jpg';
          lis.push('<li class="col-md-4 col-xs-4" >'+'<img width="98%" src='+param+'>'+'</li>')
        }
        
        //执行下一页渲染，第二参数为：满足“加载更多”的条件，即后面仍有分页
        //pages为Ajax返回的总页数，只有当前页小于总页数的情况下，才会继续出现加载更多
        next(lis.join(''), page < 2); //假设总页数为 10
      }, 500);
    }
  });
});
   </script>
   </html>