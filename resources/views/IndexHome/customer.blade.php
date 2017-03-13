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
                      <li  role="presentation">
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
                      <li  role="presentation" >
                        <a href="{{url('photoWall')}}">照片墙</a>
                      </li>
                      <li  role="presentation" class="nav-current">
                        <a href="{{url('customer')}}">客户心声</a>
                      </li>
                         <li  role="presentation">
                       <a href="{{url('cart')}}">我的购物车<span class="badge">4</span></a>
                      </li>
                    </ul>
                </div>
              </div>
             </div>
           </div>
   </nav>
<script type="text/javascript">
var InterValObj; //timer变量，控制时间
var count = 10; //间隔函数，1秒执行
var curCount;//当前剩余秒数
 
function sendMessage() {
 　curCount = count;
　　//设置button效果，开始计时
   $("#btnSendCode").attr("disabled", "true");
   $("#btnSendCode").val("请在" + curCount + "秒内输入验证码");
   InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
　　 //向后台发送处理数据
   $.ajax({
   　　type: "POST", //用POST方式传输
   　　dataType: "text", //数据格式:JSON
   　　url: 'Login.ashx', //目标地址
  　　 data: "dealType=" + dealType +"&uid=" + uid + "&code=" + code,
  　　 error: function (XMLHttpRequest, textStatus, errorThrown) { },
   　　success: function (msg){ }
   });
}
 
//timer处理函数
function SetRemainTime() {
      if (curCount == 0) {        
        window.clearInterval(InterValObj);//停止计时器
        $("#btnSendCode").removeAttr("disabled");//启用按钮
        $("#btnSendCode").val("重新发送验证码");
      }
      else {
        curCount--;
        $("#btnSendCode").val("请在" + curCount + "秒内输入验证码");
      }
    }
</script>
<body>
    <input id="btnSendCode" type="button" value="发送验证码" onclick="sendMessage()" />
    <input type="text" name="code" placeholder="请输入验证码" />
    <input type="submit" value="提交资料"/>
</body>
</html>