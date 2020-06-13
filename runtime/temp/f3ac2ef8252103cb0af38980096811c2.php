<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"E:\PHPTutorial\WWW\myblog\public/../application/admin\view\article\add.html";i:1559694632;s:74:"E:\PHPTutorial\WWW\myblog\public/../application/admin\view\common\top.html";i:1559694632;s:75:"E:\PHPTutorial\WWW\myblog\public/../application/admin\view\common\left.html";i:1559694632;}*/ ?>
<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>网站后台管理-增加页面</title>
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<link href="__PUBLIC__/css/mui.css" rel="stylesheet" />
		<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
		<script src="__PUBLIC__/js/jquery.min.js"></script>
		<script src="__PUBLIC__/js/bootstrap.min.js"></script>
		<script src="__PUBLIC__/ueditor/ueditor.config.js"></script>
		<script src="__PUBLIC__/ueditor/ueditor.all.min.js"></script>
		<script src="__PUBLIC__/ueditor/lang/zh-cn/zh-cn.js"></script>	
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
	  <li><a href="#">文章管理</a></li>
	  <li class="active">文章列表</li>
	</ol>	
	<!--面包屑结束-->
	
	<!--主要工作区域开始-->
	<div class="workplace">
		<form class="form-horizontal" method="post" enctype="multipart/form-data">
		<h5 class="page-header alert-info" style="padding: 10px;margin-top: -20px;margin-bottom: 10px;">新增文章</h5>	
			<div class="row">
				<div class="col-md-8 col-md-offset-1">
							<div class="form-group">
							<label for="title" class="col-sm-2 control-label">文章标题</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="title" name="title" placeholder="请输入文章标题">
							</div>
							</div>
							<div class="form-group">
							<label for="keywords" class="col-sm-2 control-label">文章关键字</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="keywords" name="keywords" placeholder="请输入文章关键字">
							</div>
							</div>
							<div class="form-group">
							<label for="description" class="col-sm-2 control-label">文章描述</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="description" name="description" placeholder="请输入文章描述">
							</div>
							</div>
							<div class="form-group">
							<label for="num" class="col-sm-2 control-label">文章阅读量</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="num" name="num" placeholder="请输入文章阅读量">
							</div>
							</div>
							<div class="form-group">
							<label for="zannum" class="col-sm-2 control-label">文章点赞量</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="zannum" name="zannum" placeholder="请输入文章点赞量">
							</div>
							</div>
							<div class="form-group">
							<label for="shounum" class="col-sm-2 control-label">文章收藏量</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="shounum" name="shounum" placeholder="请输入文章收藏量">
							</div>
							</div>
							<div class="form-group">
							<label for="author" class="col-sm-2 control-label">文章作者</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="author" name="author" placeholder="请输入文章作者">
							</div>
							</div>
							<div class="form-group">
							<label for="author" class="col-sm-2 control-label">文章分类</label>
							<div class="col-sm-10">
								<select name="typeid" id="typeid" class="form-control">
										<?php if(is_array($cates) || $cates instanceof \think\Collection): if( count($cates)==0 ) : echo "" ;else: foreach($cates as $key=>$ca): ?>					
										<option value="<?php echo $ca['id']; ?>"><?php echo $ca['name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
								</select>	
							</div>
							</div>
							<div class="form-group">
							<label for="pic" class="col-sm-2 control-label">图片上传</label>
							<div class="col-sm-10">
								<input type="file"  id="pic" name="pic" placeholder="请输入图片上传">
							</div>
							</div>
					    <div class="form-group">
					    <label for="text" class="col-sm-2 control-label">文章内容</label>
					    <div class="col-sm-10">
					    	<textarea name="text" id="content"></textarea>
					    </div>
					    </div>
					  
							<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<input type="submit" value="添加文章" class="btn btn-success">
								<input type="reset" value="重置信息" class="btn btn-danger">
							</div>
							</div>
					
				</div>	
				
				
			</div>	
		
		
		
		
		
		  
		</form>
		
	</div>	
	
	
	
	<!--主要工作区域结束-->
	
	
</div>	
<!--主要内容结束-->
	
	<script type="text/javascript">
	
	    //实例化编辑器
	    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
	    UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:400,});
	    
	
	
	</script>
	
	</body>

</html>

