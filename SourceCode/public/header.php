<?php
include 'session.php';
?>


<!DOCTYPE HTML>
<html>
	<head>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="index.php">衡院宿舍管理</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/index.php">H-ui</a> 
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">v1.0</span> 
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="dormitory_add('新增宿舍','dormitory_add.php','','450')" "><i class="Hui-iconfont">&#xe687;</i> 宿舍</a></li>
							<li><a href="javascript:;" onclick="dormitory_add('新增学生','student_add.php','','450')" "><i class="Hui-iconfont">&#xe62b;</i> 学生</a></li>
							<li><a href="javascript:;" onclick="dormitory_add('新增入住','order_add.php','','450')" "><i class="Hui-iconfont">&#xe692;</i> 入住</a></li>
							<li><a href="javascript:;" onclick="dormitory_add('新增报修','repair_add.php','','450')" "><i class="Hui-iconfont">&#xe63c;</i> 报修</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	
	
	
	
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
							<li><a href="logout.php">切换账户</a></li>
							<li><a href="logout.php">退出</a></li>
				</ul>
			</li>
					
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							
							<li><a href="javascript:;" data-val="default" title="默认（绿色）">默认（绿色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
				</ul>
			</li>
		</ul>
	</nav>
</div>
</div>
</header>
