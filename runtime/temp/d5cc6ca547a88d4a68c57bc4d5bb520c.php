<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:86:"D:\phpStudy\PHPTutorial\WWW\myblog\public/../application/index\view\article\index.html";i:1583065625;s:86:"D:\phpStudy\PHPTutorial\WWW\myblog\public/../application/index\view\common\header.html";i:1583216923;s:85:"D:\phpStudy\PHPTutorial\WWW\myblog\public/../application/index\view\common\right.html";i:1583505049;s:86:"D:\phpStudy\PHPTutorial\WWW\myblog\public/../application/index\view\common\footer.html";i:1583212381;s:89:"D:\phpStudy\PHPTutorial\WWW\myblog\public/../application/index\view\common\copyright.html";i:1559694632;}*/ ?>
<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>文章页面</title>
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

								
									<ul class="nav navbar-nav navbar-right" >
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
				        <h4 class="modal-title">会员注册</h4>
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
					        <h4 class="modal-title">会员登录</h4>
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
							<h2><?php echo $article['title']; ?></h2>
							<ol class="breadcrumb bread">
								<li><a href="#">首页</a></li>
								<li class="active"><a href="#"><?php echo $article['title']; ?></a></li>
							</ol>
							<p><span>收藏数：<?php echo $article['shounum']; ?></span> <span>点赞数：<?php echo $article['zannum']; ?></span></p>
							<p><span>作者：<?php echo $article['author']; ?></span> <span>发表时间：<?php echo date('Y-m-d',$article['time']); ?></span> <span>阅读数：<?php echo $article['num']; ?></span>
								<span>所属栏目：<?php echo $cate['name']; ?></p>
						</div>
					</div>

				</div>

			</div>





			<div class="row">
				<div class="col-md-8 col-sm-12">

					<div class="content-nav">
						<div class="row">
							<div class="col-md-12">
								<!-- <img src="__IMG__/<?php echo $article['pic']; ?>" alt="pig"> -->
								<p><?php echo $article['text']; ?></p>
							</div>


						</div>

					</div>



					<!--发表评论开始-->
					<div class="content-nav">
						<div class="row">
							<div class="col-md-12">
								<h4>发表评论</h4>
								<form action="<?php echo url('Comment/index'); ?>" method="post">
									<div class="form-group">
										<input type="hidden" name="nid" class="form-control" value="<?php echo $article['id']; ?>">
									</div>
									<div class="form-group">
										<input type="hidden" name="uid" class="form-control" value="<?php echo \think\Request::instance()->session('id'); ?>">
									</div>
									<div class="form-group">
										<textarea class="form-control" name="text" id="text"></textarea>
									</div>

									<button type="submit" class="btn btn-default">提交</button>
								</form>
							</div>


						</div>

					</div>

					<!--发表评论结束-->


					<!--显示评论开始-->
					<?php if(is_array($comments) || $comments instanceof \think\Collection): if( count($comments)==0 ) : echo "" ;else: foreach($comments as $k=>$com): ?>
					<div class="content-nav">
						<div class="row">
							<div class="col-md-12">
								<?php if($com['pic']): ?>
								<img src="__IMG__/<?php echo $com['pic']; ?>" alt="" style="width:30px; height: 30px;" class="img-circle">
								<?php else: ?>
								<img src="__IMG__/upload/user/author.jpg" alt="" style="width:30px; height: 30px;" class="img-circle">
								<?php endif; ?>

								<p>#<?php echo $k+1; ?> 来自<?php echo $com['username']; ?>的评论（<?php echo date('Y-m-d',$com['time']); ?>）</p>
								<p><?php echo $com['text']; ?></p>
								<hr>
							</div>
						</div>
					</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>


					<div class="content-nav">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<!--分页效果开始-->
								<nav aria-label="Page navigation">
									<ul class="pagination">
										<?php echo $comments->render(); ?>
									</ul>
								</nav>
								<!--分页效果结束-->
							</div>
						</div>
					</div>


					<!--显示评论结束-->





				</div>


				<!--右边侧边栏开始-->
				<!-- <div class="col-md-4 col-sm-12">


					<div class="row">
						<div class="col-md-12">
							<div class="thumbnail" style="background-color: #e4e0cd;padding: 30px;">
								<img class="media-object " src="__PUBLIC__/images/author-bg.jpg" alt="author">
								<img class="media-object img-circle" src="__PUBLIC__/images/author.jpg" alt="author" width="100px" height="100px"
								 style="position: relative;top: -45px;">
								<div class="caption" style="position: relative;top: -30px;">
									<h4 class="media-heading text-center">lily</h4>
									<p class="text-center">奋斗在梦想道路上的90后</p>
								</div>
							</div>


						</div>


					</div>
				</div> -->
				<!--右边侧边栏结束-->
				
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
													<button class="btn btn-default" type="submit">
														<span class="glyphicon glyphicon-search"></span>
													</button>
												</span>
											</div><!-- /input-group -->
										</form>	
								</div>	
							
								<div class="widget-siderbar">
											<div class="widget-title">
											<h2>最新文章</h2>
											</div>
											<!-- <ul class="list-unstyled">
												<?php if(is_array($articles) || $articles instanceof \think\Collection): if( count($articles)==0 ) : echo "" ;else: foreach($articles as $key=>$ar): ?>
												<li><span class="glyphicon glyphicon-heart"></span> &nbsp;<a href="<?php echo url('Article/index',array('id'=>$ar['id'])); ?>"><?php echo $ar['title']; ?></a></li>
												<?php endforeach; endif; else: echo "" ;endif; ?>
											</ul>	 -->
											<?php if(is_array($articles) || $articles instanceof \think\Collection): if( count($articles)==0 ) : echo "" ;else: foreach($articles as $key=>$ar): ?>
											<div class="row" style="margin-bottom: 15px;">
											  <div class="col-md-4 col-sm-12">
											  	<!--缩略图开始-->
											  	<a href="#" class="">
											  		<img src="__IMG__/<?php echo $ar['pic']; ?>" alt="mrth1">
											  	</a>
											  	<!--缩略图结束-->
											  </div>
											  <div class="col-md-8 col-sm-12">
											  <div class="right-post">
												  <h5><a href="<?php echo url('Article/index',array('id'=>$ar['id'])); ?>"><?php echo $ar['title']; ?></a></h5>
												  <div class="right-post-time">
													<time datetime="2019-02-18"><?php echo date('Y-m-d',$ar['time']); ?></time>
												  </div>
												  </div>
												  </div>
											</div>
											<?php endforeach; endif; else: echo "" ;endif; ?>
									</div>	
								
									
								
								
							  </div>
						</div>
					 <!--右边侧边栏结束-->
				<div class="col-md-4 col-sm-12">


					<div class="row">
						<div class="col-md-12">
							<div style="padding: 30px;">
							<div class="thumbnail" style="background-color: transparent;padding: 30px;">
								
								<img class="media-object " src="__PUBLIC__/images/author-bg.jpg" alt="author" >
								<img class="media-object img-circle" src="__PUBLIC__/images/author.jpg" alt="author" width="100px" height="100px"
								 style="position: relative;top: -45px;">
								<div class="caption" style="position: relative;top: -30px;color: #fff;">
									<h4 class="media-heading text-center">lily</h4>
									<p class="text-center">奋斗在梦想道路上的90后</p>
								</div>
								</div>
							</div>


						</div>


					</div>
				</div>
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
													<h2>关于阅读</h2>
											</div>	
										  <p>当我明白自己真正想要什么的时候，我重新拾起了阅读。</p>
									</div>	
								
							</div>
						  <div class="col-md-3 col-sm-6 col-xs-12">
								<div class="widget-footer">
										<div class="widget-title">
												<h2>友情分享</h2>
										</div>	
										<ul class="list-unstyled">
											<?php if(is_array($friends) || $friends instanceof \think\Collection): if( count($friends)==0 ) : echo "" ;else: foreach($friends as $key=>$fr): ?>
											<li><span class="glyphicon glyphicon-play-circle"></span> &nbsp;<a href="<?php echo $fr['url']; ?>" target="_blank"><?php echo $fr['name']; ?></a></li>
											<?php endforeach; endif; else: echo "" ;endif; ?>
										</ul>
								</div>	
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="widget-footer">
										<div class="widget-title">
												<h2>百度分享</h2>
										</div>	
										<p>
											<div class="bdsharebuttonbox">
												<a href="#" class="bds_more" data-cmd="more"></a>
												<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
												<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
												<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
												</div>
										<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></p>
								</div>	
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="widget-footer">
										<div class="widget-title">
												<h2>联系我们</h2>
										</div>	
										<p>邮箱：2651867435@qq.com</p>
										<p>地址：广东省广州市从化区</p>
										<p>电话：18718349537</p>
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










	</body>

</html>
