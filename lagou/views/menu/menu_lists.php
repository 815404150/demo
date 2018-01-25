<?php 
use yii\helpers\Url;
 ?>
<!doctype html>
<html>
<base href="http://www.lgdemo.com/style/" />
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
                <li><a href="http://www.17sucai.com/" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员</a></li>
                <li><a href="#">修改密码</a></li>
                <li><a href="#">退出</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="#" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
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
                        <a href="<?php echo Url::toRoute(['menu/menuinsert']) ?>"><i class="icon-font"></i>添加用户</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>用户名</th>
                            <th>密码</th>
                            <th>操作</th>
                        </tr>
                        <?php foreach($data as $k=>$v){ ?>
                        <tr>
                            <td><?php echo $v['id'] ?></td>
                            <td><?php echo $v['user'] ?></td>
                            <td><?php echo $v['pwd'] ?></td>
                            <td>
                                <a class="link-update" href="<?php echo Url::toRoute(['menu/menurevase','id'=>$v['id']]) ?>">修改</a>
                                <a class="link-del" href="<?php echo Url::toRoute(['menu/menudelete','id'=>$v['id']]) ?>">删除</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>