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
            <div class="crumb-list"><i class="icon-font"></i><a href="{{url('index')}}">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="{{url('zuoping')}}">作品管理</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                @if(count($errors)>0)
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div>
                @endif
                <form action="{{'insertProccess'}}" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>分类：</th>
                            <td>
                                <select name="cate_id" id="catid" class="required">
                                    <option value="">请选择</option>
                                    @foreach ($cateList as $cate)
                                    <option value="{{$cate->cate_id}}">{{$cate->title}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>作者：</th>
                                <td><input class="common-text" name="author" size="50" value="" type="text"></td>
                            </tr>
                             <tr>
                                <th><i class="require-red">*</i>价格：</th>
                                <td><input class="common-text" name="price" size="50" value="" type="text"></td>
                            </tr>
                              <tr>
                                <th>关键词<i class="require-red">(逗号分隔)</i></th>
                                <td><input class="common-text" name="keyword" size="50" value="" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>缩略图：</th>
                                <td>
                                <input name="Filedata" id="uploadify" type="file">
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td id="thumb">
                                </td>
                            </tr>
                            <tr>
                                <th>内容：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
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
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
<script type="text/javascript">
     $(function(){
         $.fn.delimgs = function (obj) {
          var obj = obj || '.del';
           $(obj).on('click',function(){
             $(this).parent().remove();
          });
        }
         $.fn.delimgs();

     });   
    <?php $timestamp = time();?>
    $("#uploadify").uploadify({
        'formData' : {
                    'timestamp' : '<?php echo $timestamp;?>',
                    '_token'     : "{{csrf_token()}}"
                },
        'swf':"{{asset('uploadify/uploadify.swf')}}",
        'uploader':"{{url('upload')}}",
        'cancelImg': "{{asset('uploadify/uploadify-cancel.png')}}",
        'buttonText': '上传图片', //按钮
        'fileTypeExts': '*.gif;*.jpg;*.png',  //上传类型
        'queueSizeLimit': 10,
        'auto': true,
        'multi': true,
        'onUploadSuccess':function(file,data,respose){
            var html="";
                html+="<div style='margin-left:10px;float:left;width:100px;height:100px;position:relative;'>";
                html+='<img style="width:100px;height:100px;" src='+'/'+data+'>';
                html+='<span class="del" style="position:absolute;right:0px;top:-8px;"><img src="/public/AdminHome/images/delete.png"></span>';
                html+='<input type="hidden" name="thumb[]" value='+'/'+data+'>';
                html+="</div>"; 
            $('#thumb').append(html);
            $.fn.delimgs('.del');
        }
    });
  
</script>
</html>