<!DOCTYPE html>
<html>
	<head lang="en">
	    <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="{{asset('/IndexHome/js/jquery-2.0.3.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('/IndexHome/css/bootstrap.min.css')}}">
       <script type="text/javascript" src="{{asset('/IndexHome/js/bootstrap.min.js')}}"></script>
       <link  href="{{asset('/IndexHome/css/app.css')}}" rel="stylesheet">
       <script type="text/javascript" src="{{asset('/layer/layer.js')}}"></script>
       <link type="text/css" rel="stylesheet" href="{{asset('/IndexHome/css/imagehover.min.css')}}">
      <style>
           figcaption{
            margin:0;
            padding:0;
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
                      <li  role="presentation" >
                        <a href="{{url('senth')}}">生态壁画</a>
                      </li>
                      <li  role="presentation" class="nav-current">
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
                  <div class="col-md-4 text-center col-xs-4 thumbnail">
                  <figure class="imghvr-flip-diag-1">
                           <img src="{{asset('/IndexHome/images/thumb1.jpg')}}">
                      <figcaption style="margin:0;padding:0; ">
                             <img src="{{asset('/IndexHome/images/thumb3.jpg')}}">
                      </figcaption>
                  </figure>
                          <div class="caption">
                              <h3>灵感,创意</h3>
                              <p>传递灵感创意呈现智慧与生活</p>
                              <p>
                              <button class="btn btn-info btn-xs" type="button">赞同</button>
                              <button  class="btn btn-success btn-xs" type="button">不赞同</button>
                              </p>
                          </div>
                   
                  </div>
                 <div class="col-md-4 text-center col-xs-4 thumbnail">
                            <figure class="imghvr-flip-diag-1">
                           <img src="{{asset('/IndexHome/images/thumb2.jpg')}}">
                      <figcaption style="margin:0;padding:0; ">
                             <img src="{{asset('/IndexHome/images/thumb2.jpg')}}">
                      </figcaption>
                  </figure>
                          <div class="caption">
                              <h3>灵感,创意</h3>
                              <p>传递灵感创意呈现智慧与生活</p>
                              <p>
                              <button  class="btn btn-info btn-xs" type="button">赞同</button>
                              <button  class="btn btn-success btn-xs" type="button">不赞同</button>
                              </p>
                          </div>
                  </div>
                  <div class="col-md-4 text-center col-xs-4 thumbnail">
                            <figure class="imghvr-flip-diag-1">
                           <img src="{{asset('/IndexHome/images/thumb3.jpg')}}">
                      <figcaption style="margin:0;padding:0; ">
                             <img src="{{asset('/IndexHome/images/thumb1.jpg')}}">
                      </figcaption>
                  </figure>
                         <div class="caption">
                              <h3>灵感,创意</h3>
                              <p>传递灵感创意呈现智慧与生活</p>
                              <p>
                              <button class="btn btn-info btn-xs" type="button">赞同</button>
                              <button class="btn btn-success btn-xs" type="button" >不赞同</button>
                              </p>
                          </div>
                  </div>
         </div>
                <div class="row">
                  <div class="col-md-4 text-center col-xs-4 thumbnail">
                           <figure class="imghvr-flip-diag-1">
                           <img src="{{asset('/IndexHome/images/thumb1.jpg')}}">
                      <figcaption style="margin:0;padding:0; ">
                             <img src="{{asset('/IndexHome/images/thumb3.jpg')}}">
                      </figcaption>
                  </figure>
                          <div class="caption">
                              <h3>灵感,创意</h3>
                              <p>传递灵感创意呈现智慧与生活</p>
                              <p>
                              <button  class="btn btn-info btn-xs" type="button">赞同</button>
                              <button  class="btn btn-success btn-xs" type="button">不赞同</button>
                              </p>
                          </div>
                  </div>
                 <div class="col-md-4 text-center col-xs-4 thumbnail">
                           <figure class="imghvr-flip-diag-2">
                           <img src="{{asset('/IndexHome/images/thumb2.jpg')}}">
                      <figcaption style="margin:0;padding:0; ">
                             <img src="{{asset('/IndexHome/images/thumb2.jpg')}}">
                      </figcaption>
                  </figure>
                         <div class="caption">
                              <h3>灵感,创意</h3>
                              <p>传递灵感创意呈现智慧与生活</p>
                              <p>
                              <button  class="btn btn-info btn-xs" type="button">赞同</button>
                              <button  class="btn btn-success btn-xs" type="button">不赞同</button>
                              </p>
                          </div>
                  </div>
                  <div class="col-md-4 text-center col-xs-4 thumbnail">
                           <figure class="imghvr-flip-diag-1">
                           <img src="{{asset('/IndexHome/images/thumb3.jpg')}}">
                      <figcaption style="margin:0;padding:0; ">
                             <img src="{{asset('/IndexHome/images/thumb1.jpg')}}">
                      </figcaption>
                  </figure>
                        <div class="caption">
                              <h3>灵感,创意</h3>
                              <p>传递灵感创意呈现智慧与生活</p>
                              <p>
                              <button  class="btn btn-info btn-xs" type="button">赞同</button>
                              <button  class="btn btn-success btn-xs" type="button">不赞同</button>
                              </p>
                          </div>
                  </div>
         </div>
      </div>
          <article class="text-center">
                 <nav>
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
          </article>
    </body>
       @include('IndexHome.footer')
    <script>
        $(function(){
          layer.ready(function(){ //为了layer.ext.js加载完毕再执行
              layer.photos({
                photos: '.thumbnail'
                ,shift: 4 //0-6的选择，指定弹出图片动画类型，默认随机
              });
            });   
     
                var obj={
                   'datainfo':0,
                   'datasuccess':0,
                };
            $('.caption button').on('click',function(){ 
                if($(this).hasClass("btn-info")){
                    var html="";
                    html+='<span class="label label-info" style="position:absolute;margin-top:-25px;">';
                    html+='+'+obj.datainfo;
                    html+='</span>';
                   $(this).before(html);
                    obj.datainfo+=1;
                   $(this).parent().find('span[class^="label label-info"]').animate('slow',function(){
                         $(this).hide();
                   });
                }else if($(this).hasClass('btn-success')){
                    var html="";
                    html+='<span class="label label-success" style="position:absolute;margin-top:-25px;">';
                    html+='+'+obj.datasuccess;
                    html+='</span>';
                   $(this).before(html);
                   obj.datasuccess+=1;
                  $(this).parent().find('span[class^="label label-success"]').animate('slow',function(){
                       $(this).hide();
                  });
                 
                }
               
            });
        })
       
    </script>
</html> 
