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
      <link rel="stylesheet" type="text/css" href="{{asset('/IndexHome/css/bjh.min.css')}}">
       <link rel="stylesheet" type="text/css" href="{{asset('/IndexHome/css/style.css')}}">
      <style>

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
  <div class="ct-pageWrapper">
  <main>
  <div class="container">
    <div class="col-md-12">
      <div class="row">
      @foreach($productList as $product)
      <div class="col-sm-4">
        <div class="ct-product">
        <div class="image"><img src="/{{$product->thumb[0]}}" alt="" height="300"></div>
        <div class="inner">
        <a href="{{url('bjhDetial/productId',['productId'=>$product->id])}}" class="btn btn-motive ct-product-button"><i class="fa fa-shopping-cart" data-toggle="{{$product->id}}"></i></a>
          <h2 class="ct-product-title">{{$product->title}}</h2>
          <p class="ct-product-description">{{$product->intro}}</p>
          <span class="ct-product-price">
          @if($product->current_price)
             ￥{{$product->current_price}}
            @else
            ￥{{$product->old_price}}
          @endif
          </span>
        </div>
        </div>
      </div>
      @endforeach
      </div>
    </div>
    </div>
  </div>
  </main>
  </div>
     @include('IndexHome.footer')
   </body>
  <script type="text/javascript">
    $('.fa-shopping-cart').on('click',function(){
      var url="{{url('cart')}}";
      var data={
        'productId':$(this).attr('data-toggle'),
        '_token':"{{csrf_token()}}",
      }
      $.post(url,data,function(response){

      });
    });
  </script>
   </html>
