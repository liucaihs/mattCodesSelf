<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">	
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="/tpl/simplebootx/Public/css/Global.css" />
		<!--公司引用的base，公司专门用的-->
	    <link rel="stylesheet" href="/tpl/simplebootx/Public/css/base.css" />
		<title>麦忒-跳转提示</title>
	</head>
	<body>
    
	<div class="middle">
				   <div style="height: 180px;background-color: #f9a51a;width: 65%;text-align: center;
font-size: 28px;color: azure;
				   	margin: 60px auto;
				   	border-radius:10px 10px ;
				   	">
				   	<p style=" display: block;line-height: 70px;">抱歉</p>
				   	<p style=" display: block;line-height: 50px;"><?php echo($error); ?></p>
				   	<p style="font-size: 18px;">麦忒提示：将在<b id="wait"><?php echo($waitSecond); ?></b>秒后<a id="href" href="<?php echo($jumpUrl); ?>">跳转</a></p>
				   </div>
				    <!--<p style="width: 70%;margin: 0px  34%;">
				     <img src="img/goodlogo.png" style="width: 48%;"/ >
				   </p>	-->
				    <p>
				   	<span style="display: block;background:#00a67e;margin: 0 auto;
				   	height: 45px;width: 50%;border-radius:10px 10px ;
				   	text-align:center;margin-top: 52px;" >
				   		<a href="<?php echo leuu('User/center/index');?>" style="line-height: 45px; ; font-size: 19px; color:azure;letter-spacing: -1px;">进入会员中心</a>
				   	</span>
				   </p>
			</div>
	<script type="text/javascript">
	(function(){
	var wait = document.getElementById('wait'),href = document.getElementById('href').href;
	var interval = setInterval(function(){
		var time = --wait.innerHTML;
		if(time <= 0) {
			location.href = href;
			clearInterval(interval);
		};
	}, 1000);
	})();
	</script>
    </body>
    </html>