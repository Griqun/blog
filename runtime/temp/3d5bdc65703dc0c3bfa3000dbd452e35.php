<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"E:\PHPTutorial\WWW\myblog\public/../application/admin\view\login\login.html";i:1559694632;}*/ ?>
<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="widtd=device-widtd, initial-scale=1">

		
		<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
		<!-- Jquery文件 -->
		<script src="__PUBLIC__/js/jquery.min.js" ></script>
		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script src="__PUBLIC__/js/bootstrap.min.js" ></script>
		<style>
			body{
				background:url(__PUBLIC__/images/bg.jpg) ;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;/*图片基于容器*/
				background-attachment: fixed;
				width:280px;
				margin-left: auto;
				margin-right: auto;
				margin-top:200px;
				
			}
		</style>	

	</head>

	<body>
	<form action="" method="post">
		<div class="form-group">
			<label class="sr-only" for="username">账号</label>
			<div class="input-group">
			<div class="input-group-addon">账号</div>	
			<input type="text" placeholder="请输入账号" id="username" name="username"  class="form-control">
			</div>
		</div>	
		<div class="form-group">
			<label class="sr-only" for="password">密码</label>
			<div class="input-group">
			<div class="input-group-addon">密码</div>	
			<input type="text" placeholder="请输入账号" id="password" name="password"   class="form-control">
			</div>
		</div>
		
		<div class="form-group">
			<div class="input-group">
			<input type="text" placeholder="请输入验证码" id="code" name="code"   class="form-control" style="width:280px;border-radius:3px;">
			<img src="<?php echo captcha_src(); ?>" alt="captcha" style="width:20em;height:40px;border-radius:3px;cursor:pointer;" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()"/>
			
			</div>
		</div>
		
		<input type="submit" style="width:20em" class="btn btn-success" value="登录">	
	</form>	

	</body>
</html>
