<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="{{asset('AdminHome/css/common.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('AdminHome/css/main.css')}}"/>
    <script type="text/javascript" src="{{asset('AdminHome/js/libs/modernizr.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/AdminHome/js/jquery-2.0.3.min.js')}}">
    
    </script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="{{url('index')}}">首页</a></li>
                <li><a href="{{url('/')}}" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="{{url('loginout')}}">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="{{url('zuoping')}}"><i class="icon-font">&#xe008;</i>作品管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe005;</i>博文管理</a></li>
                        <li><a href="{{url('category')}}"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="{{url('system')}}"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="{{url('index')}}">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">分类管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="{{url('insertCate')}}"><i class="icon-font"></i>新增分类</a>
                        <a id="batchDel" href="javascript:;"><i class="icon-font"></i>批量删除</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>标题</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        </tr>
                        @foreach($cateList as $cate)
                        <tr>
                            <td class="tc"><input name="id[]" value="{{$cate->cate_id}}" type="checkbox"></td>
                            <td>{{$cate->cate_id}}</td>
                            <td title="{{$cate->title}}"><a target="_blank" href="#" >{{$cate->title}}</a>
                            </td>
                            <td>{{date("Y/m/d H:i:s",$cate->time)}}</td>
                            <td>
                                <a class="link-update" href="{{url('editCate/cateId',$cate->cate_id)}}">修改</a>
                                <a class="del-cate" href="{{url('delCate/cateId',$cate->cate_id)}}" value="{{url('category')}}">删除</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
<script type="text/javascript">
    var ids=[];
     $('.del-cate').on('click',function(){
               var gnl=confirm("确认删除这条数据么?");  
                if (gnl==true){  
                 window.location.href=$(this).attr('value'); 
                }else{  
                return false;  
                }  
     });
     $("input[name='id[]']").click(function(){
           ids=[];
          $("input[name='id[]']:checked").each(function(){
            ids.push($(this).val());
        });
     });
     $('.allChoose').click(function(){
         ids=[];
        $("input[type='checkbox']").prop('checked',$(this).prop('checked'));
        $("input[name='id[]']:checked").each(function(){
            ids.push($(this).val());
        });
     });
     $('#batchDel').click(function(){
        if(ids.length>0){
            window.location.href="{{url('delCate/cateId')}}"+'/'+ids; 
        }
     })
</script>
</html>