<?php
use yii\helpers\Url;
?>
<meta charset="utf8">
<style>
table{ border-collapse: collapse; border: 1px solid #ddd; width: 800px; margin: 0 auto;margin-top: 50px; background: rgba(121, 217, 221, 0.4); color: #666}
table tr{ height: 40px;}
table td{ border: 1px solid #ddd; text-align: center}

*{margin: 0; padding:0 ; font-family: 微软雅黑}
a{ text-decoration: none; color: #666;}
ul{ list-style: none}

.top{ width: 100%; text-align: center;}
.top h2{ margin-top: 50px;}

form{ width: 450px; margin: 0 auto; margin-top: 50px;}
form input{
    width: 300px;
    height: 40px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding-left: 5px;
    font-size: 14px;
}

form p{
    margin-top: 20px;
    width: 100%;
}

form span{
    width: 100px;
    text-align: right;
    display: inline-block;
}

.where .a_button{
    width: 50px;
    height: 20px;
    line-height: 20px;
    text-align: center;
    background: green;
    color: #fff;
    border: 1px solid green;
    border-radius: 5px;
    margin: 0 auto;
}

.where{
    width: 500px;
    margin: 0 auto;
    margin-top: 20px;
}

.where a{
    padding: 5px;
    border: 1px solid rgba(0, 150, 0, 0.55);
    border-radius: 3px;
    white-space:nowrap;
    display: inline-block;
    margin-top: 10px;
    margin-left: 10px;
    color: #666;
}

.where .a_selected{
    background: rgba(0, 150, 0, 0.55);
    color: #fff;
}

.where li{
    height: 60px;
}

.where span{
    font-size: 18px;
}

.where input{
    width: 100px;
    height: 30px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-left: 10px;
}

.house_list{
    width: 500px;
    margin: 0 auto;
    margin-top: 50px;
}

.house_list li{
    margin-top: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 5px;
}

.house_img{
    float: left;
}

.house_desc{
    float: right;
}

.house_img img{
    width: 100px;
    height: 100px;
}

.house_content{
    width: 380px;
    word-wrap: break-word;
}

.house_desc .house_title{
    font-weight: bold;
}

.house_price{
    margin-top: 15px;
}
</style>

<div class="top">
    <h2>房源筛选</h2>
</div>

<div class="main">
    <ul class="where">
        <li>
            <span>区域：</span>
            <a href="" class="a_selected">全部</a>
            <a href="">昌平</a>
            <a href="">海淀</a>
            <a href="">朝阳</a>
        </li>
        <li>
            <span>排序：</span>
            <a href="" class="a_selected">按时间排序</a>
            <a href="">按价格排序</a>
        </li>
        <li>

            <form action="<?php echo Url::toRoute(['upload/price']) ?>" method="post">
                <span>价格：</span>
            <input type="text" name="price"> ~ <input type="text" name="prices">
                <input type="submit" class="a_button" value="搜索">
            </form>
        </li>
    </ul>
    <div class="house_list">
        <ul>
            <li>
                <div class="house_desc">
                    <?php foreach( $data as $k => $v ){ ?>
                    <p class="house_title"><?php echo $v['name'] ?></p>
                    <p class="house_content">
                        &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $v['desc'] ?>
                    </p>
                    <p><?php echo $v['address'] ?></p>
                    <p class="house_price">
                        价格：￥<span style="margin-right:20px;"><?php echo $v['price'] ?></span>

                        时间：<span><?php echo $v['time'] ?></span>
                    </p>
                    <?php } ?>
                </div>
                <div style="clear:both"></div>
            </li>
        </ul>
    </div>
</div>














