 吧<!--_meta 作为公共模版分离出去-->
<?php include("public/meta.php") ?>
<!--/meta 作为公共模版分离出去-->

		<title>职员列表 - 职员管理 - H-ui.admin v3.0</title>
		<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
		<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
	</head>
	<body>
<!--_header 作为公共模版分离出去-->
	<?php include("public/header.php"); ?>
<!--/_header 作为公共模版分离出去-->

<!--_menu 作为公共模版分离出去-->
	<?php include("public/left_menu.php") ?>
		<!--/_menu 作为公共模版分离出去-->

		<section class="Hui-article-box">
			<!--面包屑开始-->
			<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 职员系统 <span class="c-gray en">&gt;</span> 职员管理
				<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
			</nav>
			<!--面包屑结束-->
			
			
			<div class="Hui-article">
				<article class="cl pd-20">
					
					<div class="cl pd-5 bg-1 bk-gray mt-20"> 
						<span class="l">
							
							
								<a href="javascript:;" 
									onclick="member_add('职员登记','worker_add.php','','450')" 
									class="btn btn-primary radius">
									<i class="Hui-iconfont">&#xe600;</i> 职员登记
								</a>
						</span> 
						
					</div>
					
					<div class="mt-20">
						
						
						
						
						
						
				<table class="table table-border table-bordered table-hover table-bg table-sort">
					<thead>
						<tr class="text-c">
							<th width="25"><input type="checkbox" name="" value=""></th>
							<th width="180">职员编号</th>
							<th width="100">姓名</th>
							<th width="80">年龄</th>
							<th width="90">性别</th>
							<th width="150">工资</th>
							<th width="50">电话</th>
							<th width="100">操作</th>
						</tr>
					</thead>
					<?php 
						include("db_conn.php");
						$sql="select * from workers";
						$query=mysql_query($sql);
						while($row=mysql_fetch_array($query))
						{
							
					?>
					<tbody>
						<tr  class="text-c">
						
							<td><input type="checkbox" value="1" name=""></td>
							<td><?php echo ($row["worker_no"]);?></td>
							<td><?php echo ($row["worker_name"]);?></td>
							<td><?php echo ($row["worker_age"]);?></td>
							<td><?php echo ($row["worker_sex"]);?></td>
							<td><?php echo ($row["worker_wage"]);?></td>
							<td><?php echo ($row["worker_tel"]);?></td>
							
							
							
							<td class="td-manage">
							
								
									

										<a title="删除" href="javascript:;" onclick="member_edit('确定要删除这个职员吗？','<?php echo"worker_del.php?worker_id={$row['worker_id']}"?>','5','','450')" class="ml-5" style="text-decoration:none">
									<i class="Hui-iconfont">&#xe609</i>
								</a>		
											

							
							</td>
							
							
							
						</tr>
					</tbody>
					<?php
					}
					?>
					
					
				</table>
			</div>
		</article>
	</div>
</section>












		<!--_footer 作为公共模版分离出去-->
		<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="lib/layer/2.4/layer.js"></script>
		<script type="text/javascript" src="static/h-ui/js/H-ui.js"></script>
		<script type="text/javascript" src="static/h-ui.admin/js/H-ui.admin.page.js"></script>
		<!--/_footer /作为公共模版分离出去-->

		<!--请在下方写此页面业务相关的脚本-->
		<script type="text/javascript" src="lib/My97DatePicker/4.8/WdatePicker.js"></script>
		<script type="text/javascript" src="lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="lib/laypage/1.2/laypage.js"></script>
		<script type="text/javascript">

			/*用户-添加*/
			function member_add(title, url, w, h) {
				layer_show(title, url, w, h);
			}
			/*用户-查看*/
			function member_show(title, url, id, w, h) {
				layer_show(title, url, w, h);
			}
			
			
			/*用户-编辑*/
			function member_edit(title, url, id, w, h) {
				layer_show(title, url, w, h);
			}
				/*用户-编辑*/
			function member_del(title, url, id, w, h) {
				layer_show(title, url, w, h);
			}
			/*密码-修改*/
			function change_password(title, url, id, w, h) {
				layer_show(title, url, w, h);
			}
			
		</script>
		<!--/请在上方写此页面业务相关的脚本-->
	</body>

</html>