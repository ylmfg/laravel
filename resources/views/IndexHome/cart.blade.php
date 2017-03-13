<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
 <script type="text/javascript" src="{{asset('/IndexHome/js/jquery-2.0.3.min.js')}}"></script>
<style>
    *{
    margin:0;
    padding:0;
    }
    .box{
      width:900px;
      height: 500px;
      margin:50px auto;
    }
    .small{
    	width:400px;
    	height: 400px;
    	float:left;
    	position:relative;
    }
    .small i{
         width:100px;
         height:100px;
         background:pink;
         opacity: 0.4;
         filter:alpha(opacity=40);
         left:0;
         top:0;
         position: absolute;
         display: none;
         cursor: pointer;
    }
    .big{
    	width:400px;
    	height: 400px;
    	overflow:hidden;
    	float:left;
    	margin-left:30px;
    	margin-top:50px;
    	position:relative;
    	display: none;
    }
    .big img{
    	position:absolute;
    	left:0;
    	top:0;
    }
</style>
<body>
<div class="box">
	<div class="small">
		<img src="{{asset('../upload/images/thumb1-1.jpg')}}"/>
		<i></i>
	</div>
	<div  class="big">
		<img src="{{asset('../upload/images/thumb1.jpg')}}"/>
	</div>
</div>
</body>
<script>
	$(function(){
		$(".small").mousemove(function(e){
			 $('i').show();
			 $('.big').show();
             var L=e.pageX;
             var l=$(this).offset().left;
             var left=L-l-50;

             var T=e.pageY;
             var t=$(this).offset().top;
             var top=T-t-50;
             left=left<0?0:left;
             left=left>300?300:left;
             top=top<0?0:top;
             top=top>300?300:top;
             $("i").css({left:left,top:top});
             var imgLeft=-left*2;
             var imgTop=-top*2;
             imgLeft=imgLeft<-400?-400:imgLeft;
             imgTop=imgTop<-400?-400:imgTop;
             $(".big img").css({left:imgLeft,top:imgTop});

		});
	   $(".small").mouseout(function(){
           $('i').hide();
           $('.big').hide();

	   });
	});
</script>
</html>