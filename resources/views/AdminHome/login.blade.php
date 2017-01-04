<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>『意灵玻艺装饰工坊』后台管理</title>
    <link href="{{asset('/AdminHome/css/admin_login.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="{{url('login')}}" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="username"  id="user" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="text" name="pwd" id="pwd" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                    <li>
                       <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <p class="admin_copyright"><a tabindex="5" href="{{url('/')}}">返回首页</a> &copy; 2016 Powered by <a href="{{url('/')}}" target="_blank">意灵玻艺装饰工坊</a></p>
</div>
</body>
</html>