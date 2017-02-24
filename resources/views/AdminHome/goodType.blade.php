<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="{{asset('AdminHome/css/common.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('AdminHome/css/main.css')}}"/>
    <script type="text/javascript" src="{{asset('AdminHome/js/libs/modernizr.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('IndexHome/js/jquery-2.0.3.min.js')}}"></script>
    <link href="{{asset('uploadify/uploadify.css')}}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{asset('uploadify/jquery.uploadify.min.js')}}"></script>
    <!--引入ueditor-->
    <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/ueditor.config.js')}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/ueditor.all.min.js')}}"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/lang/zh-cn/zh-cn.js')}}"></script>

    <style>
        .mark{
            background: #fffbf0;
            font-size:15px;
            font-family: '楷体';
        }
        .edui-default{
            line-height: 28px;
         }
        div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body{
            overflow: hidden;
            height: 20px;    
         }
        div.edui-box{
            overflow: hidden;
            height: 22px;
        } 
    
    </style>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="{{url('index')}}">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="{{url('Adminloginout')}}">退出</a></li>
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
                        <li><a href="{{url('goodType')}}"><i class="icon-font">&#xe005;</i>商品属性类型管理</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="{{url('index')}}">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="{{url('goodType')}}">商品属性类型管理</a><span class="crumb-step">&gt;</span><span>新增商品属性类型</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                @if(count($errors)>0)
                  <div class="mark">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div>
                @endif
                <form action="{{url('goodType')}}" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>商品属性类型名称：</th>
                                <td>
                                 @if(!empty($goodType->type_name))
                                    <input class="common-text required" id="title" name="type_name" size="50" value="{{$goodType->type_name}}" type="text">
                                   @else
                                    <input class="common-text required" id="title" name="type_name" size="50" value="" type="text">
                                 @endif
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            @if(!empty($goodType->type_id))
                            <input type="hidden" name="type_id" value="{{$goodType->type_id}}">
                            @endif
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
<script>
    $(function(){
        var type_id=$("input[name='type_id']").val();
        if(type_id){
            $("input[type='submit']").click(function(check){
            var url="{{url('goodType')}}"+'/'+type_id+'/edit';
            var type_name=$("input[name='type_name']").val();
            var data={
                'type_id':type_id,
                'type_name':type_name
            }
            $.get(url,data,function(res){
                if(res.error==1){
                    window.location.href="{{url('goodType')}}";
                }else{
                    location.href=location.href;
                }
            },'json');
            check.preventDefault();
          });
        }
    })
</script>
</html>