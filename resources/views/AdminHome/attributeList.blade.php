<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>『意灵玻艺装饰工坊』后台管理</title>
    <link rel="stylesheet" type="text/css" href="{{asset('AdminHome/css/common.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('AdminHome/css/main.css')}}"/>
    <script type="text/javascript" src="{{asset('AdminHome/js/libs/modernizr.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('IndexHome/js/jquery-2.0.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/layer/layer.js')}}"></script>
    <style>
        .center{
            text-align: center;
        }
        .list-page ul li{
            float:left;
        }
        .list-page ul li span{
            padding:6px 5px;
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
                        <li><a href="{{url('goodType')}}"><i class="icon-font">&#xe005;</i>商品类型管理</a></li>
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
                    <a href="{{url('goodType')}}"><i class="icon-font">&#xe001;</i>返回商品类型管理</a>
  
                </div>
            </div>
        </div>
     
        <div class="result-wrap">
            <div class="result-content">
               <table style="width:100%;" border="1">
                   <thead>
                      <tr>
                       <th>编号</th>
                       <th>商品属性类型名称</th>
                       <th>属性是否可选</th>
                       <th>属性的录入方式</th>
                       <th>操作</th>
                       </tr>
                   </thead>
                   <tbody>
                     @foreach($attributeList as $attribute)
                       <tr>
                           <td class="center">{{$attribute->attr_id}}</td>
                           <td class="center">{{$attribute->attr_name}}</td>
                           <td class="center">
                               @if($attribute->attr_type==1)
                                   单一属性
                                 @elseif($attribute->attr_type==2)
                                   多种属性
                                 @elseif($attribute->attr_type==3)
                                   唯一属性
                               @endif
                           </td>
                           <td class="center">
                                @if($attribute->attr_input_type==1)
                                   手动输入
                                 @elseif($attribute->attr_input_type==2)
                                   列表中选择
                                 @elseif($attribute->attr_input_type==3)
                                   多行文本框
                               @endif
                           </td>
                           <td class="center">
                           <a href="javascript:void(0)" data-toggle="{{url('attribute',['attr_id'=>$attribute->attr_id])}}" class="del">删除</a>&nbsp;&nbsp;<a href="{{url('attribute',['attr_id'=>$attribute->attr_id,'eidt'=>'edit'])}}">编辑</a></td>
                       </tr>
                    @endforeach
                   </tbody>
               </table>
              <div class="list-page" style="float:left;">
                        {{$attributeList->links()}}
              </div>
            </div>
                 
        </div>
    </div>
    <!--/main-->
</div>
</body>
<script>
  $(function(){
     $('.del').on('click',function(){
         var url=$(this).attr('data-toggle');
         var data={
            'type':'DELETE',
            '_token':"{{csrf_token()}}"
         };
         layer.open({
                content: '您确定要删除本条数据么？'
                ,btn: ['确定', '不要']
                ,yes: function(index){
                    $.ajax({
                             type: "DELETE",
                             url: url,
                             data: data,
                             dataType: "json",
                             success: function(res){
                                    if(res.error==1){
                                        window.location.href=location.href;
                                    }else{
                                        window.location.href=location.href;
                                    }
                            }
                    });
                  layer.close(index);
                }
          });
  
     });
  });
</script>
</html>