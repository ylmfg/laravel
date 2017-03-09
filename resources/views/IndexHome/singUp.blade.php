<!DOCTYPE html>
<title>娇子基金-专业权威癌症公益平台</title>
    <include file="Public/mobile_head"/>
    <link href="/Public/Home/css/usercenter.css?v={:SITE_VERSION}" rel="stylesheet" type="text/css">
    <style type="text/css">
    .btn-default {
        color: #333;
        background-color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        padding: 3px 5px;
        border: 1px solid #e7e7e7;
        border-radius: 1px;
    }
    .btnadd{
        width: 10%;
    }
    .item-inner{
            border-bottom: 1px solid #e7e7e7;
    }
    .item-inner ul{
        width: 55%;margin-left:5%; 
    }
    .item-input{
        line-height: 38px;
    }
    .donation_box form{margin-bottom: 20px;}
    </style>
<body>
<div class="donation_box">

    <form action="__SELF__" enctype="multipart/form-data" method="POST" id="testform">
        <div class="item-input">
            <input type="hidden" name="act_id" value="{$act_id}">
        </div>
        <ul class="show-box">
            <li>
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title label">报名类型：</div>
                        <select name="flag" style="border: none" >
                            <option value="0">个人报名</option>
                            <option value="1">团队报名</option>
                        </select>
                    </div>
                </div>
            </li>
        </ul>
        <div class="single" id="single" style="">
            <ul class="show-box">
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">姓名：</div>
                            <div class="item-input">
                                <input type="text" name="single_name" style="border: none">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">出生日期：</div>
                            <div class="item-input">
                                <input type="date" name="birthday" style="border: none">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">证件类型：</div>
                            <div class="item-input">
                                <select name="iden_type" style="border: none">
                                    <option value="身份证">身份证</option>
                                    <option value="军官证">军官证</option>
                                    <option value="护照">护照</option>
                                    <option value="其他">其他</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">证件号码：</div>
                            <div class="item-input">
                                <input type="text" name="iden_number" style="border: none">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">常住地：</div>
                            <div class="item-input">
                                <input type="text" name="often_live" style="border: none">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">性别：</div>
                            <div class="item-input">
                                <select name="sex" style="border: none">
                                    <option value="0">男</option>
                                    <option value="1">女</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">手机号码：</div>
                            <div class="item-input">
                                <input type="text" name="contacts_method" style="border: none">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">上衣尺码：</div>
                            <div class="item-input">
                                <select name="top_size" style="border: none">
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">下装尺码：</div>
                            <div class="item-input">
                                <select name="bottom_size" style="border: none">
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">袜子尺码：</div>
                            <div class="item-input">
                                <select name="socks_size" style="border: none">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


        <div class="team" id="team" style="display: none">

            <ul class="show-box">
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">团队名称：</div>
                            <div class="item-input">
                                <input type="text" name="team_name" style="border: none">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">联系人：</div>
                            <div class="item-input">
                                <input type="text" name="contacts_name" style="border: none">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">手机号码：</div>
                            <div class="item-input">
                                <input type="text" name="contacts_method" style="border: none">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">参赛人数：</div>
                            <div class="item-input">
                                <p style="float:left;width: 30%"> 男：</p>
                                <input type="number" name="boys_number" style="border: none;width: 50%;float: left">
                            </div>
                            <div class="item-input">
                                <p style="float:left;width: 30%"> 女：</p>
                                <input type="number" name="girls_number" style="border: none;width: 50%;float: left">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">上衣尺码：</div>
                            <div class="btnadd"><input type="button" class="btn-default" id="add_top" value="增加"></div>

                            <ul id="top">
                                <li>
                                    <div class="item-input">
                                        <select name="top_sex[]" style="border: none;width: 30%;float: left">
                                            <option value="0">男</option>
                                            <option value="1">女</option>
                                        </select>
                                        <select name="top_size[]" style="border: none;width: 30%;float: left">
                                            <option value="XS">XS</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>
                                        </select>
                                        <input type="number" name="top_number[]" style="border: none" value="1"
                                               style="width: 30%"/>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">下衣尺寸：</div>
                            <div class="btnadd"><input type="button"  class="btn-default" id="add_bottom" value="增加"></div>
                            <ul id="bottom">
                                <li>
                                    <div class="item-input">
                                        <select name="bottom_sex[]" style="border: none;width: 30%;float: left">
                                            <option value="0">男</option>
                                            <option value="1">女</option>
                                        </select>
                                        <select name="bottom_size[]" style="border: none;width: 30%;float: left">
                                            <option value="XS">XS</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>
                                        </select>
                                        <input type="number" name="bottom_number[]" style="border: none" value="1"
                                               width="30%"/>
                                    </div>

                                </li>
                            </ul>
                        </div>

                    </div>

                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">袜子尺码：</div>
                            <div class="btnadd"><input type="button" class="btn-default"  id="add_socks" value="增加"></div>
                            <ul id="socks">
                                <li>
                                    <div class="item-input">
                                        <select name="socks_sex[]" style="border: none;width:30%;float: left">
                                            <option value="0">男</option>
                                            <option value="1">女</option>
                                        </select>
                                        <select name="socks_size[]" style="border: none;width:30%;float: left">
                                        		<option value="XS">XS</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                        </select>
                                        <input type="number" name="socks_number[]" style="border: none" value="1"
                                               style="width: 30%"/>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">参赛宣言：</div>
                            <div class="item-input">
                                <textarea name="activity_manifesto" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="Validform_checktip"
             style="text-align:center;padding:20px auto;color:red"></div>
        <div class="mark">
            注：提交后不可修改，请确认所填信息准确无误
        </div>
        <div class="submit-img"><img src="" alt=""></div>
        <div class="ban_top"
             style=" width:60%; height:10%;  border-top:2px; color:#e8e8e8; bottom:0; overflow:hidden; cursor: pointer;margin:0 auto;">
            <button type="submit" data-role="button" class="ui-btn-jz">确认提交</button>
        </div>
    </form>


</div>

</body>
</html>
<script>
    $('form').find('div:hidden').find(':input').attr('disabled', 'disabled');
    //切换报名类型
    $("select[name='flag']").change(function () {
        var single = $('#single').css('display');
        var team = $('#team').css('display');
        var l = team.length;
        if (l == 4) {
            $('#single').css('display', "none");
            $('#team').css('display', "block");
            $('#single').find(':input').attr('disabled', 'disabled');
            $('#team').find(':input').attr('disabled',false);
        } else if (l == 5) {
            $('#single').css('display', "block");
            $('#team').css('display', 'none');
            $('#single').find(':input').attr('disabled', false);
            $('#team').find(':input').attr('disabled',true);
        }
    });
    //下装点击添加一行
    $("#add_bottom").click(function () {
        var temp = $("#bottom li").clone();
        $("#bottom").append(temp);

    });
    $("#add_top").click(function () {
        var temp = $("#top li").clone();
        $("#top").append(temp);
    });
    $("#add_socks").click(function () {
        var temp = $("#socks li").clone();
        $("#socks").append(temp);
    });
    //    表单验证

    $("form").submit(function () {
        var self = $(this);
        $.post(self.attr("action"), self.serialize(), success);
        return false;

        function success(data) {
            if (data.status) {
                window.location.href = data.url;
            } else {
                $(".Validform_checktip").text(data.info);
            }
        }
    })
</script>