<?php 
use yii\helpers\Url;
 ?>
<!doctype html>
<base href="http://www.lgdemo.com/style/" />
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.17sucai.com">管理员</a></li>
                <li><a href="http://www.17sucai.com">修改密码</a></li>
                <li><a href="http://www.17sucai.com">退出</a></li>
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
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>用户管理</a></li>
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>菜单管理</a></li>
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>菜单管理</a></li>
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>菜单管理</a></li>
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>菜单管理</a></li>
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>菜单管理</a></li>
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>菜单管理</a></li>
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>菜单管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>菜单管理</a></li>
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>菜单管理</a></li>
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>菜单管理</a></li>
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>菜单管理</a></li>
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>菜单管理</a></li>
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>菜单管理</a></li>
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>菜单管理</a></li>
                        <li><a href="<?php echo Url::toRoute(['menu/menulists']) ?>"><i class="icon-font">&#xe008;</i>菜单管理</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">作品管理</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo Url::toRoute(['menu/menuinsert1']) ?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th width="120"><i class="require-red">*</i>用户名：</th>
                            <td>
                                <input type="text" name="user" id="user" placeholder="请输入用户名">
                                <span class="p"></span>
                            </td>
                        </tr>
                        <tr>
                            <th width="120"><i class="require-red">*</i>密码：</th>
                            <td>
                                <input type="password" name="pwd" placeholder="请输入密码">
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit" >
                                <input class="btn btn6" onClick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>
<script src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#user").blur(function () {
           var name =$(this).val();
           if(name==''){
               $('.p').html("<font color='red'>请输入用户名！</font>"); return;
           }
           $.ajax({
               url:"<?php echo Url::toRoute(['menu/menujudgment']) ?>",
               data:{"user":name},
               type:"post",
               success:function(msg){
                   if(msg == 1){
                       $('.p').html("<font color='green'>√</font>"); return;
                   }
                   if(msg==2){
                       $('.p').html("<font color='red'>此用户已存在！</font>"); return;
                   }
               }
           })
        });
    })
</script>