<!DOCTYPE HTML>
<html>
	<head>
<?php include("public/meta.php")?>
		<title>后台登录</title>
		<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
		<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
	</head>

	<body>
		<input type="hidden" id="TenantId" name="TenantId" value="" />
		<div class="header"></div>
		<div style="height: 120px;width: 100%;"></div>
		<div style="height:60px; width: 100%;" class="text-c"><h2>衡水学院宿舍管理系统</h2></div>
		<div class="loginWraper">
			<div id="loginform" class="loginBox">
				
				<form class="form form-horizontal" name="form1" action="login_denglu.php" method="post">
					<div class="row cl">
						<label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
						<div class="formControls col-xs-8">
							<input id="username" name="username" type="text" placeholder="用户" class="input-text size-L">
						</div>
					</div>
					<div class="row cl">
						<label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
						<div class="formControls col-xs-8">
							<input id="pwd" name="pwd" type="password" placeholder="密码" class="input-text size-L">
						</div>
					</div>

					<div class="row cl">
						<div class="formControls col-xs-8 col-xs-offset-3">
							<input name="button" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
							<input name="reset" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
							<input name="action" type="hidden" value="do" />
						</div>
					</div>
				</form>
			</div>
		</div>
		</br></br></br></br></br></br>
		<div class="footer">Copyright 衡水学院 by H-ui.admin.page.v3.0</div>

		<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="static/h-ui/js/H-ui.js"></script>
	</body>

</html>