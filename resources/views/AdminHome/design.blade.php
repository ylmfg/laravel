<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="{{asset('AdminHome/css/common.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('AdminHome/css/main.css')}}"/>
    <script type="text/javascript" src="{{asset('AdminHome/js/libs/modernizr.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/IndexHome/js/jquery-2.0.3.min.js')}}"></script>
    <style>
        .result-tab tr th,td{
            text-align:center;
        }
        .list-page ul li{
            float:left;
        }
        .list-page ul li span{
            padding:6px 5px;
        }
        .current_price{
            color:red;
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
                <li><a href="{{url('/')}}" target="_blank">网站首页</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="{{url('index')}}">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    @foreach($cateList as $cate)
                                    <option value="{{$cate->cate_id}}" @if($cate->cate_id==$cateId) selected @endif>{{$cate->title}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="{{url('insert')}}"><i class="icon-font"></i>新增作品</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                        <a href="{{url('attribute/create')}}"><i class="icon-font"></i>商品属性</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>封面图片</th>
                            <th>标题</th>
                            <th>原价(元)</th>
                            <th>现价(元)</th>
                            <th>分类栏目</th>
                            <th>审核状态</th>
                            <th>发布人</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        </tr>
                        @foreach($productList as $product)
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>{{$product->id}}</td>
                            <td><img src="/{{$product->thumb[0]}}" width="100" height="100"></td>
                            <td title="{{$product->title}}"><a target="_blank" href="#" title="{{$product->title}}">{{$product->title}}</a>
                            </td>
                            <td>{{$product->old_price}}</td>
                            <td>
                              @if($product->current_price)
                                <span class="current_price">{{$product->current_price}}</span>
                                @else
                                 现价暂未调整
                              @endif
                            </td>
                            <td>{{$product->cate_title}}</td>
                            <td>
                                @if(0==$product->status)
                                 未审核
                                @else
                                 已审核
                                @endif
                            </td>
                            <td>{{$product->publisher}}</td>
                            <td>{{date('Y/m/d H:i:s',$product->uptime)}}</td>
                            <td>
                                <a class="link-update" href="{{url('editProduct/productId',['productId'=>$product->id])}}">修改</a>
                                <a class="link-del" href="#">删除</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="list-page">
                        {{$productList->links()}}
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
<script>
    $('select[name="search-sort"]').on('change',function(){
           var url;
           if($(this).val()){
                url="{{url('zuoping')}}"+'/'+$(this).val();
               location.href=url;
           }else{
               url="{{url('zuoping')}}";
               location.href=url;
           }
   
    });
</script>
</html>