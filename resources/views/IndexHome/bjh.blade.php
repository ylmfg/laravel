<!DOCTYPE html>
<html>
	<head lang="en">
	    <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="{{asset('/js/jquery-2.0.3.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
       <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
       <link  href="{{asset('/css/app.css')}}" rel="stylesheet">
       <script type="text/javascript" src="{{asset('/layer/layer.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('/css/book.css')}}">
       <script type="text/javascript" src="{{asset('/js/book.js')}}"></script>
      <style>

      </style>
	</head>
    <body>
     <header class="main-header">
         <div class="container">
          <div class="row">
            <div class="col-md-12">
              <a class="branding" href="#" title="意灵魔法馆">
 <img src="{{asset('/images/logo.png')}}">
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
                    </ul>
                </div>
              </div>
             </div>
           </div>
   </nav>
   <section id="knowledge" class="viewBlock">
    <div class="bookBox">
      <a class="lastBtn"><</a>
      <a class="nextBtn">></a>
      <div class="bookPage frist">
        <img src="images/dataImg1.png" />
      </div>
      <div class="bookPage runPage">
        <div class="bookWord">
          <span>Glacier</span> red in the glacier.
          <span class="pageNumber">1</span>
        </div>
        <img src="images/dataImg2.png" />  
      </div>
      <div class="bookPage runPage">
        <div class="bookWord">        
          <span>Surface</span>  water supply, the .
          <span class="pageNumber">2</span>
        </div>
        <img src="images/dataImg3.png" />
      </div>
      <div class="bookPage runPage">
        <div class="bookWord">
          <span>Groundwater</span>itions, good .
          <span class="pageNumber">3</span>
        </div>
        <img src="images/dataImg4.png" />
      </div>
      <div class="bookPage last">
        <div class="bookWord">
          <span>Ocean</span>nts for only 2%.</span>
          <span class="pageNumber">4</span>
        </div>
      </div>
    </div>
  </section>
   </body>
   </html>
