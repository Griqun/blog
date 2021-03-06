<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:75:"E:\PHPTutorial\WWW\myblog\public/../application/index\view\about\index.html";i:1580547117;s:77:"E:\PHPTutorial\WWW\myblog\public/../application/index\view\common\header.html";i:1559694632;s:76:"E:\PHPTutorial\WWW\myblog\public/../application/index\view\common\right.html";i:1559694632;s:77:"E:\PHPTutorial\WWW\myblog\public/../application/index\view\common\footer.html";i:1580545629;s:80:"E:\PHPTutorial\WWW\myblog\public/../application/index\view\common\copyright.html";i:1559694632;}*/ ?>
<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>关于我们</title>
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<link href="__PUBLIC__/css/mui.css" rel="stylesheet" />
		<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
		<script src="__PUBLIC__/js/jquery.min.js"></script>
		<script src="__PUBLIC__/js/bootstrap.min.js"></script>
		<link href="__PUBLIC__/css/main.css" rel="stylesheet">
	</head>

	<body id="top">
		<!--第一个区域开始-->
		<div class="container content-wrapper">
			
			
			
				<div class="row">
						<div class="col-md-12">
							<div class="content-nav">
							<!--导航内容开始-->
							<nav class="navbar navbar-default navbar-zdy">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#"><img src="__PUBLIC__/images/logo.png"></a>
								</div>

								
									<ul class="nav navbar-nav navbar-right">
										<li class="active"><a href="<?php echo url('Index/index'); ?>">首页</a></li>
										<?php if(is_array($cates) || $cates instanceof \think\Collection): if( count($cates)==0 ) : echo "" ;else: foreach($cates as $key=>$ca): ?>
										<li><a href="<?php echo url('Cate/index',array('id'=>$ca['id'])); ?>"><?php echo $ca['name']; ?></a></li>
										<?php endforeach; endif; else: echo "" ;endif; ?>
										<li><a href="<?php echo url('About/index'); ?>">关于</a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">会员中心 <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a  href="#"><?php echo \think\Request::instance()->session('username'); ?></a></li>
												<li><a href="#myModal1" data-toggle="modal" >会员登录</a></li>
												<li><a href="#myModal" data-toggle="modal" >会员注册</a></li>
												<li><a href="<?php echo url('Login/Logout'); ?>">退出</a></li>
											</ul>
										</li>
									</ul>
							</div><!-- /.container-fluid -->
						</nav>
						<!--导航内容结束-->	
						</div>					
						</div>	
					
					
				</div>
				
				
					<!--注册模态框开始-->	
					<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
				  <div class="modal-dialog" role="document" style="width:400px;">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title">注册页面</h4>
				      </div>
				      <div class="modal-body">
				        
								<form action="<?php echo url('Login/add'); ?>" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="username">用户名</label>
									<input type="text" class="form-control"  name="username"      id="username" placeholder="请输入用户名">
								</div>
								<div class="form-group">
									<label for="password">密码</label>
									<input type="password" class="form-control" name="password"  id="password" placeholder="请输入密码">
								</div>
								<div class="form-group">
									<label for="nickname">昵称</label>
									<input type="text" class="form-control"  name="nickname"    id="nickname" placeholder="请输入昵称">
								</div>
								<div class="form-group">
									<label for="nickname">照片上传</label>
									<input type="file"  name="pic"    id="pic" placeholder="请上传照片">
								</div>
								
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				        <button type="submit" class="btn btn-primary">注册</button>
				      </div>
							</form>
							
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
					<!--注册模态框结束-->			
						
					
					<!--登录模态框开始-->
					<div class="modal fade" tabindex="-1" role="dialog" id="myModal1">
					  <div class="modal-dialog" role="document" style="width:400px;">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title">登录页面</h4>
					      </div>
					      <div class="modal-body">
					        
									<form action="<?php echo url('Login/login'); ?>" method="post">
									<div class="form-group">
										<label for="username">用户名</label>
										<input type="text" class="form-control "    name="username"       id="username" placeholder="请输入用户名">
									</div>
									<div class="form-group">
										<label for="password">密码</label>
										<input type="password" class="form-control"  name="password"       id="password" placeholder="请输入密码">
									</div>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
					        <button type="submit" class="btn btn-primary">登录</button>
					      </div>
								</form>
								
					    </div><!-- /.modal-content -->
					  </div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
				<!--登录模态框结束-->
				
				
			<div class="row">
					<div class="col-md-12">
						<div class="content-nav">
							<div class="heading-title">
								<h2><?php echo $about['title']; ?></h2>
								<ol class="breadcrumb bread">
									<li><a href="#">首页</a></li>				
									<li class="active"><a href="#"><?php echo $about['title']; ?></a></li>
								</ol>
							</div>	
						</div>	
						
					</div>	
				
			</div>	
				
				
			
				
				
				<div class="row">
						<div class="col-md-8 col-sm-12">
							
							<div class="content-nav">
								<div class="row">
										<div class="col-md-12">
											 <img src="__IMG__/<?php echo $about['pic']; ?>" alt="pig">
											 <P><?php echo $about['text']; ?></P>
										</div>	
								
								
								</div>	
							
							</div>
							
						
							
							
							</div>
					
					
					 
					 <!--右边侧边栏开始-->
					  <div class="col-md-4 col-sm-12">
								<div class="content-nav">
								<div class="widget-siderbar">
									  <div class="widget-title">
										<h2>搜索</h2>
										</div>
										<form action="<?php echo url('Index/search'); ?>" method="">
											<div class="input-group">
												<input type="text" name="search"  class="form-control" placeholder="Search for...">
												<span class="input-group-btn">
													<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
												</span>
											</div><!-- /input-group -->
										</form>	
								</div>	
							
								<div class="widget-siderbar">
											<div class="widget-title">
											<h2>最新文章</h2>
											</div>
											<ul class="list-unstyled">
												<?php if(is_array($articles) || $articles instanceof \think\Collection): if( count($articles)==0 ) : echo "" ;else: foreach($articles as $key=>$ar): ?>
												<li><span class="glyphicon glyphicon-heart"></span> &nbsp;<a href="<?php echo url('Article/index',array('id'=>$ar['id'])); ?>"><?php echo $ar['title']; ?></a></li>
												<?php endforeach; endif; else: echo "" ;endif; ?>
											</ul>	
									</div>	
								
								<div class="widget-siderbar">
											<div class="widget-title">
											<h2>友情链接</h2>
											</div>
											<ul class="list-unstyled">
												<?php if(is_array($friends) || $friends instanceof \think\Collection): if( count($friends)==0 ) : echo "" ;else: foreach($friends as $key=>$fr): ?>
												<li><span class="glyphicon glyphicon-play-circle"></span> &nbsp;<a href="<?php echo $fr['url']; ?>"><?php echo $fr['name']; ?></a></li>
												<?php endforeach; endif; else: echo "" ;endif; ?>
											</ul>	
								</div>	
								
								
							  </div>
						</div>
					 <!--右边侧边栏结束-->
					
					
					
				</div>
			
		</div>
		<!--第一个区域结束-->
		
		
		
		
		
		<!--底部区域开始-->
		<div class="footer">
				<div class="container">
					<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="widget-footer">
											<div class="widget-title">
													<h2>关于博主</h2>
											</div>	
										  <p>一个互联网草根站长的个人博客网站,关注互联网、独立博客、个人网站。本站主要用来分享互联网资讯、教程、学习笔记、感悟以及记录博主的一些生活琐事等。</p>
									</div>	
								
							</div>
						  <div class="col-md-3 col-sm-6 col-xs-12">
								<div class="widget-footer">
										<div class="widget-title">
												<h2>最新文章</h2>
										</div>	
										<ul class="list-unstyled">
											<?php if(is_array($articles) || $articles instanceof \think\Collection): if( count($articles)==0 ) : echo "" ;else: foreach($articles as $key=>$ar): ?>
											<li><a href="<?php echo url('Article/index',array('id'=>$ar['id'])); ?>"><?php echo $ar['title']; ?></a></li>
											<?php endforeach; endif; else: echo "" ;endif; ?>
										</ul>	
								</div>	
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="widget-footer">
										<div class="widget-title">
												<h2>百度分享</h2>
										</div>	
										<p><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_bdysc" data-cmd="bdysc" title="分享到百度云收藏"></a><a href="#" class="bds_tqf" data-cmd="tqf" title="分享到腾讯朋友"></a><a href="#" class="bds_meilishuo" data-cmd="meilishuo" title="分享到美丽说"></a><a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a><a href="#" class="bds_huaban" data-cmd="huaban" title="分享到花瓣"></a><a href="#" class="bds_h163" data-cmd="h163" title="分享到网易热"></a><a href="#" class="bds_mogujie" data-cmd="mogujie" title="分享到蘑菇街"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></p>
								</div>	
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="widget-footer">
										<div class="widget-title">
												<h2>联系我们</h2>
										</div>	
										<p>邮箱：2696576948@QQ.com</p>
										<p>地址：广东省广州市从化区</p>
										<p>电话：15622598941</p>
								</div>	
							</div>


					</div>
					
				</div>	
			
			
		</div>
		<!--底部区域结束-->
	  
	
	
	<!--版权区域开始-->
		<div class="copyright">
				<div class="container">
						<div class="row">
							 <div class="col-md-12 col-sm-12">
									<a href="#top" class="btn btn-default btn-second"><span class="glyphicon glyphicon-chevron-up"></span></a>				 
							 </div>
						</div>
					  <div class="row">
							<div class="col-md-6 col-sm-12 copyright-left">copyright @ 2018 All Right Reserved.</div>
							<div class="col-md-6 col-sm-12 copyright-right">gereboke by lily</div>
							
						</div>
					
				</div>	
			
			
			
		</div>
		<!--版权区域结束-->
	
	
	
		
	<!--注册模态框开始-->	
	<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document" style="width:400px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">注册页面</h4>
      </div>
      <div class="modal-body">
        
				<form>
				<div class="form-group">
					<label for="username">用户名</label>
					<input type="text" class="form-control " id="username" placeholder="请输入用户名">
				</div>
				<div class="form-group">
					<label for="password">密码</label>
					<input type="password" class="form-control" id="password" placeholder="请输入密码">
				</div>
				<div class="form-group">
					<label for="content">用户简介</label>
					<textarea class="form-control"></textarea>
				</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="submit" class="btn btn-primary">注册</button>
      </div>
			</form>
			
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<!--注册模态框结束-->			
		
	
	<!--登录模态框开始-->
	<div class="modal fade" tabindex="-1" role="dialog" id="myModal1">
	  <div class="modal-dialog" role="document" style="width:400px;">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">注册页面</h4>
	      </div>
	      <div class="modal-body">
	        
					<form>
					<div class="form-group">
						<label for="username">用户名</label>
						<input type="text" class="form-control " id="username" placeholder="请输入用户名">
					</div>
					<div class="form-group">
						<label for="password">密码</label>
						<input type="password" class="form-control" id="password" placeholder="请输入密码">
					</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	        <button type="submit" class="btn btn-primary">登录</button>
	      </div>
				</form>
				
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!--登录模态框结束-->
	
	
	
	
	
	
		
	</body>

</html>

