<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>『意灵玻艺装饰工坊』后台管理</title>
    <link rel="stylesheet" type="text/css" href="{{asset('AdminHome/css/common.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('AdminHome/css/main.css')}}"/>
    <script type="text/javascript" src="{{asset('AdminHome/js/libs/modernizr.min.js')}}"></script>
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
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎来到意灵玻艺装饰工坊。</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>快捷操作</h1>
            </div>
            <div class="result-content">
                <div class="short-wrap">
                    <a href="{{url('insert')}}"><i class="icon-font">&#xe001;</i>新增作品</a>
                    <a href="#"><i class="icon-font">&#xe005;</i>新增博文</a>
                    <a href="#"><i class="icon-font">&#xe048;</i>新增作品分类</a>
                    <a href="#"><i class="icon-font">&#xe041;</i>新增博客分类</a>
                    <a href="#"><i class="icon-font">&#xe01e;</i>作品评论</a>
                </div>
            </div>
        </div>
     
        <div class="result-wrap">
            <div class="result-title">
                <h1>使用帮助</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">官方交流网站：</label><span class="res-info"><a href="{{url('/')}}" title="意灵玻艺装饰工坊" target="_blank">意灵玻艺装饰工坊</a></span>
                    </li>
                    <li>
                        <label class="res-lab">官方交流QQ群：</label><span class="res-info"><a class="qq-link" target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=b04cbcd330cddf806985d55966a397fde5a1b855f6530efbd6d958a43aea5566"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="意灵玻艺装饰工坊" title="意灵玻艺装饰工坊"></a> </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>