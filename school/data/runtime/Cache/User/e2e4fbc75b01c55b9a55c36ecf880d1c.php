<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<base target="_blank">
<title><?php echo ($site_name); ?></title>
<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
<meta name="description" content="<?php echo ($site_seo_description); ?>">
<meta name="author" content="ganggang">
<link rel="stylesheet" href="/tpl/simplebootx/Public/css/Global.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="/tpl/simplebootx/Public/css/register.css" />
<!--公司引用的base，公司专门用的-->
<link rel="stylesheet" href="/tpl/simplebootx/Public/css/base.css" />

</head>

<body>
<div class="overall">
  <div class="top"> <a href="javascript;" onClick="history.go(-1)"><img src="/tpl/simplebootx/Public/images/arrow_left.png" style="height: 20px; margin-top: 14px;margin-left: 8%;"/></a> <span>注册</span>
  <!--开始-->

<?php $allNav = theNav(); ?>
<a onclick="tor()" id="tor">
<div class="drawer-toggle drawer-hamberger"> <span></span></div>
</a> <a onclick="one()"><span class="indexspan" id="one"></span></a>
<div class="indexUL" id="indexUL">
  <ul>
  <?php if(is_array($allNav)): foreach($allNav as $key=>$vo): if ($vo['href'] == 'home') { $url = '/'; } else { $href = unserialize($vo[href]); if ($href) { $url = "/".$href['action']."?id=".$href['param']['id']; } else { $url = $vo['href']; } } ?>
  <a href="<?php echo ($url); ?>" style="color:#FFF">
    <li> <?php echo ($vo["label"]); ?> </li>
    </a><?php endforeach; endif; ?>
  </ul>
</div>
<!--结束--> 

<script>
             function one(){/*这是那二个XX*ONE是XXtorSHIｎａｇｅ*/
                 document.getElementById("indexUL").style.display='none';
                 document.getElementById("one").style.display='none';
                 document.getElementById("tor").style.display='block';
                 }
    	         function tor(){
                 document.getElementById("indexUL").style.display='block';
                 document.getElementById("tor").style.display='none';
                 document.getElementById("one").style.display='block';
                 }
             </script>
  </div>
  <div class="middle">
    <p style="margin-left: 12%;line-height: 130px;letter-spacing: 0.00001px;"> <span>&nbsp;&nbsp;&nbsp;手机号:</span>
      <input type="phone" name="phone" id="phone" class="text" />
    </p>
    <p style="margin-left:12%;margin-top: -5px;"> <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;密码:</span>
      <input type="password" name="password1" id="password1" class="text"style="width: 60%;" />
    </p>
    <p style="line-height: 115px;margin-left: 12%;"> <span >再次输入:</span>
      <input type="password" name="password2" id="password2" class="text"style="width: 60%;"/>
    </p>
    <!--待修改的地方-->
    <p>
      <input type="button" id="btn" value="免费获取!" style="display: block;margin-left:43% ;background: #F7AB00;
				   	height: 43px;width: 47%;border-radius:10px 10px ;
				   	text-align:center;margin-top: 6px; border:0px" />
    </p>
    <p style="line-height: 100px;margin-left: 6%;"> <span >短信验证码:</span>
      <input type="text" id="code" name="text" class="text"style="width: 55%;"/>
    </p>
    <!--待修改的地方-->
    <p style="line-height: 80px;margin-left: 16%;margin-top: -35px;">
      <input type="checkbox" id="checkbox" value="1" style="  margin: -4px 0px 0px 3px;" />
      <span style="font-size: 18px;letter-spacing: -2px;">我已同意<a href="<?php echo leuu('portal/page/index',array('id'=>6));?>">《麦麦注册用户协议》</a></span> </p>
    <p> <span style="display: block;margin-left:2% ;background:#00A73D;
				   	height: 43px;width:96%;border-radius:10px 10px ;text-align:center;margin-top: 6px;"  onClick="checkCode()" > <a style="line-height: 43px; ; font-size: 25px; color:azure;">立即注册</a> </span> </p>
  </div>
  <div class="bottom">
<ul>
<li>联系电话</li>
<li><a href="tel:4009982033">400-998-2033</a></li>               	
</ul>
</div>
</div>

<!--遮罩层-->
<div id="Ee" style="left: 90%;font-size: 25px;
		 position: absolute;z-index:5555;
		 display: none;
		        top: 85px;"> <a href="#" onclick="click02()" style=" color:#FF0000 ;" >x</a> </div>
<div id="Zz">
  <ul>
    <p>dsadasdsa</p>
  </ul>
</div>
</body>
</html>
<script type="text/javascript" src="/tpl/simplebootx/Public/js/jquery-1.8.2.min.js"></script>
<style type="text/css">
#Zz {
	list-style: none;
	border-radius: 10px 10px;
	width: 90%;
	height: 600px;
	position: absolute;
	margin-left: 5%;
	margin-top: -650px;
	background: #FFFFFF;
	overflow-y: auto;
	display: none;
}
</style>
<script type="text/javascript">
function click01(){
    document.getElementById("Zz").style.display='block';
    var  printul=document.getElementById('Zz');
      document.getElementById("Ee").style.display='block';
    var  printul=document.getElementById('Ee');
 }
function click02(){
    document.getElementById("Zz").style.display='None';
    var  printul=document.getElementById('Zz');
     document.getElementById("Ee").style.display='None';
    var  printul=document.getElementById('Ee');
 }
</script>
<script>
function register()
{
	var phone = $("#phone").val();
	var password1 = $("#password1").val();
	var password2 = $("#password2").val();
	if($("#checkbox").attr("checked") != 'checked') {
		alert('请同意协议');
		return false;
	}
	if (phone.length != 11) {
		alert('请输入正确的手机号码');
		return false;
	}
	if (password1 != password2 || password1 == '' || password2 == '') {
		alert('两次密码不一致');
		return false;
	}
	var infos ={
		username:phone,
		password:password1,
		repassword:password2,
		is_ajax:1
	}
	$.ajax({
		type:"POST",
		url:"<?php echo U('user/register/doregister');?>",
		data:infos,
		success: function(data){
			if (data.status == 1) {
				window.location.href='<?php echo U('user/register/isregister');?>';
				
			} else {
				alert(data.info);
				return false;
			}
		}
	})

}
</script>
<script>

function sendCode()
{
	var phone = $("#phone").val();
	if (phone.length != 11) {
		alert("请输入正确的号码");
		exit;
	}
	var infos ={
		phone:phone,
		zone:86,
		is_ajax:1
	}
	$.ajax({
		type:"POST",
		url:"http://app.mattservice.com/info/index.php?g=portal&m=list&a=sendCode",
		data:infos,
		success: function(data){
			if(data == 200) {
			}else{
				alert('发送失败');
				return false;
			}
		}
	})
}
function checkCode()
{
	var code = $("#code").val();
	var phone = $("#phone").val();
	if (code == '') {
		alert('请输入验证码');
		return false;
	}
	var datas = {
		phone:phone,
		code:code,
		is_ajax:1
	}
	$.ajax({
		type:"POST",
		url:"http://app.mattservice.com/info/index.php?g=portal&m=list&a=checkCode",
		data:datas,
		success: function(data) {
			if (data != 200) {
				alert("验证码错误");
				return false;
			} else if (data == 200) {
				register();
			}
		}
	})
}
</script>
<script>
var wait=60;  
function time(o) {  
        if (wait == 0) {  
            o.removeAttribute("disabled");            
            o.value="免费获取!";  
            wait = 60;  
        } else {  
            o.setAttribute("disabled", true);  
            o.value="重新发送(" + wait + ")";  
            wait--;  
            setTimeout(function() {  
                time(o)  
            },  
            1000)  
        }  
}
$(function(){
	$("#btn").click(function(){
	time(this);
	sendCode();
	
})
}) 
</script>