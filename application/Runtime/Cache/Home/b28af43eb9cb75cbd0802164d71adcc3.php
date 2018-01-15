<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php echo (html_entity_decode($nav["header"])); ?>
    <link rel="stylesheet" type="text/css" href="/Public/Home/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/public.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/productDetail.css">
    <style>
        #content{
            width: 60%;
        }
        .next{
            float: left;
        }
        .pre{
            float: right;
        }
        .paragraph img.orientation{
            /*width: 70%;*/
            max-width: 700px;
        }
        .paragraph img.portrait{
            /*width: 70%;*/
            max-width: 700px;
        }
    </style>
</head>
<body>
<!--导航 -->
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('Index/index');?>" style="padding: 5px 0;"><img src="/Public/Home/imgs/logo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo U('Index/index');?>#aboutUs}">关于睿梵</a></li>
                <li><a href="<?php echo U('Index/advantage');?>">优势</a></li>
                <li><a href="<?php echo U('Index/product');?>">产品链</a></li>
                <li><a href="<?php echo U('Index/Index');?>#case">案例</a></li>
                <li><a href="<?php echo U('News/news');?>">新闻</a></li>
                <li><a href="<?php echo U('Index/index');?>#footer">联系我们</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- <div class="content">
    <div id="content" class="typeSize">

    </div>
</div> -->
<div class="content">
    <div id="content" class="typeSize">
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- <a href="/index.php/Home/News/detail/id/<?php echo ($new["new_id"]); ?>"> -->
                <div class="row news-item" >
                 <h3 class="item-title" align="center"><?php echo ($vo["new_title"]); ?></h3>
                    <!-- <div class="img col-xs-4"><img src=<?php echo (ltrim($vo["new_pic"],'.')); ?>></div> -->
                    <div class="des col-xs-7 col-xs-offset-1" style="width:100%">
                       
                        <div class="item-des" >
                            <?php echo (html_entity_decode($vo["new_content"])); ?>
                        </div>
                    </div>
                </div>
            </a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>

<!--底部-->
<div class="footer">
    <div class="typeSize row">
        <div class="footerLogo col-sm-4">
            <img style="width: 100%;" src="/Public/Home/imgs/footer/logo.png" alt="">
        </div>
        <div class="contactUs col-sm-6">
            <div class="footerTitle">联系我们</div>
            <div class="clearfix">
                <ul class="pull-left ul1">
                    <li><img class="icon" src="/Public/Home/imgs/footer/phone@3x.png" alt="">189 1353 7782</li>
                    <li><img class="icon" src="/Public/Home/imgs/footer/tel@3x.png" alt="">0512-68799367</li>
                    <li><img class="icon" src="/Public/Home/imgs/footer/qq@3x.png" alt="">3369906628</li>
                </ul>
                <ul class="pull-left ul2">
                    <li><img class="icon" src="/Public/Home/imgs/footer/web.png" alt="">www.redefinedesign.cn</li>
                    <li><img class="icon" src="/Public/Home/imgs/footer/email.png" alt="">redefinedesign@163.com</li>
                    <li><img class="icon" src="/Public/Home/imgs/footer/address@3x.png" alt="">苏州市高新区竹园路209号苏州创业园</li>
                </ul>
            </div>
        </div>
        <div class="focusUs col-sm-2">
            <div class="footerTitle">关注我们</div>
            <img src="/Public/Home/imgs/footer/code.jpg" alt="">
        </div>
    </div>
</div>
<div class="copyRight">
    版权所有： 苏州睿梵工业设计有限公司&nbsp;&nbsp;&nbsp;苏ICP备15056404号
</div>
</body>
<script id="news-main" type="text/html">
    <h1 class="title">
        {{title}}
    </h1>
    {{each sections as section i}}
   <section class="paragraph">
       <div class="text">{{section.text}}</div>
       {{if section.imgs}}
            {{each section.imgs as img j}}
                <div class="img-box">
                    <img class={{img.class}} src={{"/Public/Home/imgs/news/"+img.src+".jpg"}} alt="">
                    {{if img.tip}}
                    <div class="img-tip">{{img.tip}}</div>
                    {{/if}}
                </div>
       {{/each}}
       {{/if}}
   </section>
    {{/each}}
    <div class="bottom clearfix">
        <div class="next"><&nbsp;{{nxt.text}}</div>
        <div class="pre">>&nbsp;{{pre.text}}</div>
    </div>
</script>
<script type="text/javascript" src="/Public/Home/libs/jquery/jquery.min.js"></script>
<!-- <script type="text/javascript" src="/Public/Home/libs/bootstrap/js/bootstrap.min.js"></script> -->
<!-- <script type="text/javascript" src="/Public/Home/libs/template-web.js"></script>
<script type="text/javascript" src="/Public/Home/script/publice.js"></script>
<script type="text/javascript" src="/Public/Home/script/news-detail.js"></script> -->
</html>