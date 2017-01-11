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
       <link rel="stylesheet" type="text/css" href="http://libs.useso.com/js/font-awesome/4.2.0/css/font-awesome.min.css">
       <link rel="stylesheet" type="text/css" href="{{asset('/IndexHome/css/style.css')}}">
       <script type="text/javascript" src="{{asset('/IndexHome/js/shop.min.js')}}"></script>
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
     <nav class="main-navigation" style="margin-bottom: -3px;">
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
    <div class="row">
    <div class="col-md-3">
      <div class="widget">
      <h2 class="widget-header">购物车</h2>
      <div class="ct-cart"></div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="row">
      <div class="col-sm-4">
        <div class="ct-product">
        <div class="image"><img src="{{asset('IndexHome/images/product-01.jpg')}}" alt=""></div>
        <div class="inner"><a href="#" class="btn btn-motive ct-product-button"><i class="fa fa-shopping-cart"></i></a>
          <h2 class="ct-product-title">Box of macaroons</h2>
          <p class="ct-product-description">A very delicious macaroons ...</p><span class="ct-product-price">$19.99</span>
        </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="ct-product">
        <div class="image"><img src="{{asset('IndexHome/images/product-02.jpg')}}" alt=""></div>
        <div class="inner"><a href="#" class="btn btn-motive ct-product-button"><i class="fa fa-shopping-cart"></i></a>
          <h2 class="ct-product-title">Cherry Straws</h2>
          <p class="ct-product-description">A very delicious macaroons ...</p><span class="ct-product-price">$34.99</span>
        </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="ct-product">
        <div class="image"><img src="{{asset('IndexHome/images/product-03.jpg')}}" alt=""></div>
        <div class="inner"><a href="#" class="btn btn-motive ct-product-button"><i class="fa fa-shopping-cart"></i></a>
          <h2 class="ct-product-title">Coffee Macaroons</h2>
          <p class="ct-product-description">A very delicious macaroons ...</p><span class="ct-product-price">$59.99</span>
        </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="ct-product">
        <div class="image"><img src="{{asset('IndexHome/images/product-04.jpg')}}" alt=""></div>
        <div class="inner"><a href="#" class="btn btn-motive ct-product-button"><i class="fa fa-shopping-cart"></i></a>
          <h2 class="ct-product-title">Finetti ones</h2>
          <p class="ct-product-description">A very delicious macaroons ...</p><span class="ct-product-price">$9.99</span>
        </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="ct-product">
        <div class="image"><img src="{{asset('IndexHome/images/product-05.jpg')}}" alt=""></div>
        <div class="inner"><a href="#" class="btn btn-motive ct-product-button"><i class="fa fa-shopping-cart"></i></a>
          <h2 class="ct-product-title">Minty duo</h2>
          <p class="ct-product-description">A very delicious macaroons ...</p><span class="ct-product-price">$3.99</span>
        </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="ct-product">
        <div class="image"><img src="{{asset('IndexHome/images/product-06.jpg')}}" alt=""></div>
        <div class="inner"><a href="#" class="btn btn-motive ct-product-button"><i class="fa fa-shopping-cart"></i></a>
          <h2 class="ct-product-title">Pistachio</h2>
          <p class="ct-product-description">A very delicious macaroons ...</p><span class="ct-product-price">$13.99</span>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  </main>
  </div>
   </body>
<script>
$('body').ctshop({
  currency: '￥',
  paypal: {
  currency_code: 'EUR'
  }
});
$('.col-sm-4').on('click',function(){
    //跳转页面
})
</script>
   </html>
