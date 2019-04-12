 吧<!--_meta 作为公共模版分离出去-->
<?php include("public/meta.php") ?>
<!--/meta 作为公共模版分离出去-->

		<title>住宿列表 - 宿舍管理 - H-ui.admin v3.0</title>
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
			<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 住宿管理 <span class="c-gray en">&gt;</span> 住宿列表
				<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
			</nav>
			<!--面包屑结束-->
			
			
			<div class="Hui-article">
				<article class="cl pd-20">
					
					
					<form action="order_search_time.php" method="post">
					<div class="text-c">
						<?php 
							@$key1=$_POST['key1'];
							@$key2=$_POST['key2'];
							?>
                        <input type="date" class="input-text" style="width:250px"  id="" name="key1">
						<input type="date" class="input-text" style="width:250px"  id="" name="key2">	
							
							
							
						<button type="submit" class="btn btn-success radius"  id="" name=""><i class="Hui-iconfont">&#xe665;</i> 时间检索</button>
						<button type="button" onclick="javascrtpt:window.location.href='order_list.php'" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe66b;</i> 取消</button>

					
					
					</div>
					</form>
					

					
					<div class="mt-20">
						<?php echo"下面为登记时间从   $key1  至     $key2  的检索结果：";?>
				<table class="table table-border table-bordered table-hover table-bg table-sort">
					<thead>
						<tr class="text-c">
							<th width="25"><input type="checkbox" name="" value=""></th>
							<th width="80">宿舍号</th>
							<th width="100">宿舍床号</th>
							<th width="40">学号</th>
							<th width="90">姓名</th>
							<th width="70">登记时间</th>
							<th width="100">操作</th>
						</tr>
					</thead>
					<?php 
						include("db_conn.php");
						@$order_no_name=$_POST["order_no_name"];
					@$sql="select * from orders where order_time between '$key1'and '$key2'";
						$query=mysql_query($sql);
						while(@$row=mysql_fetch_array($query))
					{
					?>
					<tbody>
						<tr  class="text-c">
						
							<td><input type="checkbox" value="1" name=""></td>
							<td><?php echo ($row["order_dor_no"]);?></td>
							<td><?php echo ($row["order_bed"]);?></td>
							<td><?php echo ($row["order_stu_no"]);?></td>
							<td><?php echo ($row["order_stu_name"]);?></td>
							<td class="td-status">
								<span class="label label-success radius"><?php echo ($row["order_time"]);?></span></td>
							<td class="td-manage">
								
								
								
									<a title="编辑" href="javascript:;" onclick="member_edit('编辑','<?php echo"order_editor.php?order_id={$row['order_id']}"?>','4','','510')" class="ml-5" style="text-decoration:none">
									<i class="Hui-iconfont">&#xe6df;</i>
								</a> 

										<a title="删除" href="javascript:;" onclick="member_edit('确定要删除这个信息吗？','<?php echo"order_del.php?order_id={$row['order_id']}"?>','5','','450')" class="ml-5" style="text-decoration:none">
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
//		<script type="text/javascript">
//			
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
			/*密码-修改*/
			function change_password(title, url, id, w, h) {
				layer_show(title, url, w, h);
			}

		</script>
		<!--/请在上方写此页面业务相关的脚本-->
	</body>

</html>