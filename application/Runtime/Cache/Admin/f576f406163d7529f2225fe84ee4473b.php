<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>睿梵设计后台管理系统</title>
  <meta name="description" content="这是一个 user 页面">
  <meta name="keywords" content="user">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/Public/assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/Public/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/Public/assets/css/admin.css">
   <script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/ueditor/ueditor.all.min.js"></script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
    UE.getEditor('intro_detail',{    //intro_detail为要编辑的textarea的id
        initialFrameWidth: 700,   //初始化宽度
        initialFrameHeight: 300,   //初始化高度
    });

</script>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>睿梵设计</strong> <small>后台管理</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">

      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
            <li>
                <a href="<?php echo U('Index/loginout');?>"><span class="am-icon-power-off"></span> 退出</a>
            </li>
        </ul>
      </li>
      <li><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>
<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar">
    <ul class="am-list admin-sidebar-list">
      <li><a href="<?php echo U('Main/index');?>"><span class="am-icon-home"></span> 首页</a></li>
      <li><a href="<?php echo U('Nav/nav');?>"><span class="am-icon-table"></span> 首页SEO管理</a></li>
      <li><a href="<?php echo U('Banner/ban');?>"><span class="am-icon-check"></span> 轮播图管理</a></li>
      <li><a href="<?php echo U('News/news');?>"><span class="am-icon-table"></span> 新闻管理</a></li>
      <li><a href="<?php echo U('Cases/cases');?>"><span class="am-icon-pencil-square-o"></span> 案例管理</a></li>
      <!-- <li><a href="<?php echo U('Contacts/contacts');?>" class="am-cf"><span class="am-icon-check"></span> 联系方式<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li> -->
      <li> <a href="<?php echo U('Main/savepass');?>"><span class="am-icon-file"></span> 修改密码 </a></li>
    </ul>

    <div class="am-panel am-panel-default admin-sidebar-panel">
      <div class="am-panel-bd">
        <p><span class="am-icon-bookmark"></span> 公告</p>
        <p>时光静好，与君语；细水流年，与君同。—— Refedine</p>
      </div>
    </div>
</div>
<!-- sidebar end -->

  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">案例管理</strong> / <small>Cases</small></div>
    </div>

    <div class="am-g">
      <div class="am-u-md-6 am-cf">
        <div class="am-fl am-cf">
          <div class="am-btn-toolbar am-fl">
            <div class="am-btn-group am-btn-group-xs">
              <a href="<?php echo U('Cases/add');?>"><button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 添加案例</button></a>
            </div>

       
          </div>
        </div>
      </div>
      <div class="am-u-md-3 am-cf">
        <div class="am-fr">
   
        </div>
      </div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr>
                   </th><th class="table-id" style="width:10%">ID</th><th class="table-title" style="width:20%">标题</th><th class="table-type" style="width:10%">封面图</th><th class="table-date" style="width:40%;text-align:center" >内容</th><th class="table-set" style="width:20%">操作</th>
              </tr>
          </thead>
          <tbody>
          <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$con): $mod = ($i % 2 );++$i;?><tr>
             
              <td><?php echo ($con["orderby"]); ?></td>
              <td><?php echo ($con["case_title"]); ?></td>
              <td><img src= "<?php echo (ltrim($con["case_pic"],'.')); ?>" style="width:50px;" /></td>
              <td style="text-align:center"><?php echo ($con["case_content"]); ?></td>
          
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <a href="<?php echo U('edit','id='.$con['case_id']);?>"><button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button></a>
               
                    <a href="<?php echo U('del','id='.$con['case_id']);?>"><button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger"><span class="am-icon-trash-o"></span> 删除</button></a>
                  </div>
                </div>
              </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </tbody>
        </table>
          <div class="am-cf">
 
<!--   <div class="am-fr">
    <ul class="am-pagination">
      <li class="am-disabled"><a href="#">«</a></li>
      <li class="am-active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">»</a></li>
    </ul>
  </div> -->
</div>
          <hr />     
        </form>
      </div>

    </div>
  </div>
  <!-- content end -->
</div>

<footer>
    <hr>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/polyfill/rem.min.js"></script>
<script src="assets/js/polyfill/respond.min.js"></script>
<script src="assets/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/Public/assets/js/jquery.min.js"></script>
<script src="/Public/assets/js/amazeui.min.js"></script>
<!--<![endif]-->
<script src="/Public/assets/js/app.js"></script>
</body>
</html>