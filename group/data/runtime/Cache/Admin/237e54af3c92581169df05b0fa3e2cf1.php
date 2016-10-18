<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/group/public/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/group/public/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/group/public/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/group/public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		.length_3{width: 180px;}
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/group/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/group/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/group/public/js/jquery.js"></script>
    <script src="/group/public/js/wind.js"></script>
    <script src="/group/public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
<body class="J_scroll_fixed">
	<div class="wrap jj">
		<ul class="nav nav-tabs">
			<li><a href="<?php echo U('Vaccine/getBabyInfo');?>">宝宝每日信息</a></li>
			<li class="active"><a>添加信息</a></li>
		</ul>
		<div class="common-form">
			<form method="post" class="form-horizontal J_ajaxForm" action="">
				<fieldset>
					<div class="control-group">
						<label class="control-label">天数:</label>
						<div class="controls">
							<input type="text" class="input" name="day" value="">
							<span class="must_red">*</span>
						</div>
					</div>
                    <div class="control-group">
						<label class="control-label">身高:</label>
						<div class="controls">
							<input type="text" class="input" name="height" value="">
							<span class="must_red">*</span>
						</div>
					</div>
                    <div class="control-group">
						<label class="control-label">体重:</label>
						<div class="controls">
							<input type="text" class="input" name="weight" value="">
							<span class="must_red">*</span>
						</div>
					</div>
                  <div class="control-group">
						<label class="control-label">内容:</label>
						<div class="controls">
							<textarea rows="6" name="info"></textarea>
							<span class="must_red">*</span>
						</div>
					</div>
				</fieldset>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary btn_submit J_ajax_submit_btn">添加</button>
					<a class="btn" href="/group/index.php/Admin/Vaccine">返回</a>
				</div>
			</form>
		</div>
	</div>
	<script src="/group/statics/js/common.js"></script>
    <script type="text/javascript" src="/group/statics/js/content_addtop.js"></script>

</body>
</html>