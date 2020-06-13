<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"D:\phpStudy\PHPTutorial\WWW\myblog\public/../application/admin\view\admin\index.html";i:1559694632;s:83:"D:\phpStudy\PHPTutorial\WWW\myblog\public/../application/admin\view\common\top.html";i:1559694632;s:84:"D:\phpStudy\PHPTutorial\WWW\myblog\public/../application/admin\view\common\left.html";i:1559694632;}*/ ?>
<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>网站后台管理</title>
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<link href="__PUBLIC__/css/mui.css" rel="stylesheet" />
		<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
		<script src="__PUBLIC__/js/jquery.min.js"></script>
		<script src="__PUBLIC__/js/bootstrap.min.js"></script>
		<style>
			/*头部右边导航*/
			.navbar-zdy{
				margin-right:25px;			
			}
			/* 小屏幕（平板，大于等于 768px） */
            @media (min-width:768px) { 
				
				#slider{
					width:250px;
					height:600px;
					position: absolute;
					z-index: 1;			
				}	
				.main{
					margin-left: 255px;			
				}
				
				.panel-zdy{
					margin-top:-20px;				
				}
				.panel-body1{
					height:550px;	
				}
				.breadcrumb-zdy{
					margin-top:-20px;
					
				}
				
				
			}
			
			
			
			
			
		</style>	
		
		
	</head>

	<body>
	<!--导航开始-->
	
	<nav class="navbar navbar-default navbar-static-top">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">网站后台管理</a>
    </div>

    
      <ul class="nav navbar-nav navbar-right navbar-zdy">
      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <?php echo \think\Request::instance()->session('username'); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo url('Login/logout'); ?>">退出登录</a></li>
            <li><a href="<?php echo url('Admin/modify',array('id'=>\think\Request::instance()->session('id'))); ?>">修改密码</a></li>
          </ul>
        </li>
      </ul>
   
   
 
  <!--侧边栏开始-->
   <div class="navbar-default" style="margin-top: 51px;" id="slider">
	  <ul class="nav">
		<li><a href="#sub1" data-toggle="collapse"><span class="glyphicon glyphicon-user"></span> 用户管理<span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>  
		<ul class="nav collapse" id="sub1">
			<li><a href="<?php echo url('Admin/index'); ?>"><span class="glyphicon glyphicon-hand-right"></span> 管理员列表</a></li>
			<li><a href="<?php echo url('User/index'); ?>"><span class="glyphicon glyphicon-hand-right"></span> 用户列表</a></li>
		</ul>
			
		<li><a href="#sub2" data-toggle="collapse"><span class="glyphicon glyphicon-list-alt"></span> 文章管理<span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>  
		<ul class="nav collapse" id="sub2">
			<li><a href="<?php echo url('Article/index'); ?>"><span class="glyphicon glyphicon-hand-right"></span> 文章列表</a></li>
			<li><a href="<?php echo url('Comment/index'); ?>"><span class="glyphicon glyphicon-hand-right"></span> 评论列表</a></li>
			<li><a href="<?php echo url('About/index'); ?>"><span class="glyphicon glyphicon-hand-right"></span> 关于列表</a></li>

		</ul>		
		
		<li><a href="#sub3" data-toggle="collapse"><span class="glyphicon glyphicon-list"></span> 栏目管理<span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>  
		<ul class="nav collapse" id="sub3">
			<li><a href="<?php echo url('Cate/index'); ?>"><span class="glyphicon glyphicon-hand-right"></span> 栏目列表</a></li>
		</ul>
				
		<li><a href="#sub4" data-toggle="collapse"><span class="glyphicon glyphicon-certificate"></span> 友情管理<span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>  
		<ul class="nav collapse" id="sub4">
			<li><a href="<?php echo url('Friend/index'); ?>"><span class="glyphicon glyphicon-hand-right"></span> 友情列表</a></li>
		</ul>			
	 </ul>	  
	  
  </div>	  
  <!--侧边栏结束-->
</nav>	
<!--导航结束-->

<!--主要内容开始-->
<div class="main">
	<!--面包屑开始-->
	<ol class="breadcrumb breadcrumb-zdy">
	  <li><a href="#">首页</a></li>
	  <li><a href="#">管理员管理</a></li>
	  <li class="active">管理员列表</li>
	</ol>	
	<!--面包屑结束-->
	
	<!--主要工作区域开始-->
	<div class="workplace">
		<h3>管理员列表</h3>
		<a href="<?php echo url('Admin/add'); ?>" class="btn btn-success">新增</a>
		<table class="table table-striped table-bordered table-hover table-responsive">
			<thead>
			<tr>
				<th>ID</th>
				<th>管理员名称</th>
				<th>管理员密码</th>
				<th>注册时间</th>
				<th>操作</th>
			</tr>
			</thead>
			<tbody>	
			<?php if(is_array($admins) || $admins instanceof \think\Collection): $i = 0; $__LIST__ = $admins;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ad): $mod = ($i % 2 );++$i;?>
			<tr>
				<td><?php echo $ad['id']; ?></td>
				<td><?php echo $ad['username']; ?></td>
				<td><?php echo $ad['password']; ?></td>
				<td><?php echo date('Y-m-d',$ad['time']); ?></td>
				<td>
					<?php if($ad['id'] != 1): ?>
					<a href="<?php echo url('Admin/del',array('id'=>$ad['id'])); ?>" onclick="return confirm('确定需要删除吗？')" class="btn btn-success btn-sm">删除</a> 
					<?php endif; ?>
					<a href="<?php echo url('Admin/modify',array('id'=>$ad['id'])); ?>" class="btn btn-success btn-sm">修改</a></td>
			</tr>	
			<?php endforeach; endif; else: echo "" ;endif; ?>
			
			
			</tbody>
		</table>	
		
		<!--分页开始-->
		<nav aria-label="Page navigation" class="text-center">
		  <ul class="pagination">
				<?php echo $admins->render(); ?>
			</ul>
		</nav>
		<!--分页结束-->
		
	</div>	
	
	
	
	<!--主要工作区域结束-->
	
	
</div>	
<!--主要内容结束-->
	
	</body>

</html>

