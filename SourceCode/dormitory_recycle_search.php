 吧<!--_meta 作为公共模版分离出去-->
<?php include("public/meta.php") ?>
<!--/meta 作为公共模版分离出去-->

		<title>宿舍列表 - 宿舍管理 - H-ui.admin v3.0</title>
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
			<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 宿舍管理 <span class="c-gray en">&gt;</span> 宿舍列表
				<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
			</nav>
			<!--面包屑结束-->
			
			
			<div class="Hui-article">
				<article class="cl pd-20">
					
					
					<form action="dormitory_recycle_search.php" method="post">
					<div class="text-c">
						<?php $key=$_POST['dor_no_head'];?>
						<input type="text" class="input-text" style="width:250px" placeholder="<?php echo($key);?>" id="" name="dor_no_head">
						<button type="submit" class="btn btn-success radius"  id="" name=""><i class="Hui-iconfont">&#xe665;</i> 检索</button>
						<button type="button" onclick="javascrtpt:window.location.href='dormitory_list.php'" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe66b;</i> 取消</button>

					
					
					</div>
					</form>
					
					
					<div class="cl pd-5 bg-1 bk-gray mt-20"> 
						<span class="l">
							
								<a href="javascript:;" 
									onclick="member_add('添加宿舍','dormitory_add.php','','450')" 
									class="btn btn-primary radius">
									<i class="Hui-iconfont">&#xe600;</i> 添加宿舍
								</a>
						</span> 
						
					</div>
					
					<div class="mt-20">
						
						
						
						
						
						
				<table class="table table-border table-bordered table-hover table-bg table-sort">
					<thead>
						<tr class="text-c">
							<th width="25"><input type="checkbox" name="" value=""></th>
							<th width="80">宿舍号</th>
							<th width="100">舍长</th>
							<th width="40">宿舍人数</th>
							<th width="90">宿舍电话</th>
							<th width="70">宿舍状态</th>
							<th width="100">操作</th>
						</tr>
					</thead>
					<?php 
						
						include("db_conn.php");
						@$dor_no_head=$_POST["dor_no_head"];
						$sql="select * from dormitory where dor_no='$dor_no_head'or dor_head='$dor_no_head'";
						$query=mysql_query($sql);
						
						
						
						
						while($row=mysql_fetch_array($query))
						if($row["dor_del"]==1)
						{
						{
					?>
					<tbody>
						<tr class="text-c">
							<td><input type="checkbox" value="1" name=""></td>
							<td><?php echo ($row["dor_no"]);?></td>
							<td><?php echo ($row["dor_head"]);?></td>
							<td><?php echo ($row["dor_per"]);?></td>
							<td><?php echo ($row["dor_tel"]);?></td>
							<td class="td-status">
								<span class="label label-success radius">
									<?php echo ($row["dor_state"]);?></span></td>
							<td class="td-manage">
								
								<!--<a style="text-decoration:none" onClick="member_stop(this,'10001')" href="javascript:;" title="停用">
									<i class="Hui-iconfont">&#xe631;</i>
								</a> -->
								
									<a title="还原" href="javascript:;" onclick="member_edit('确定还原此宿舍吗？','<?php echo"dormitory_recycle_bak.php?dor_id={$row['dor_id']}"?>','4','','510')" class="ml-5" style="text-decoration:none">
									<i class="Hui-iconfont">&#xe66b;</i>
								</a> 

										<a title="删除" href="javascript:;" onclick="member_edit('确定要删除这个宿舍吗？','<?php echo"dormitory_recycle_del.php?dor_id={$row['dor_id']}"?>','5','','450')" class="ml-5" style="text-decoration:none">
									<i class="Hui-iconfont">&#xe609</i>
								</a>		
							</td>
							
							
							
						</tr>
					</tbody>
					<?php
					}
					}
					?>
					</table>
					
					<?php echo("相似结果：");?>
					
	<table class="table table-border table-bordered table-hover table-bg table-sort">
					<thead>
						<tr class="text-c">
							<th width="25"><input type="checkbox" name="" value=""></th>
							<th width="80">宿舍号</th>
							<th width="100">舍长</th>
							<th width="40">宿舍人数</th>
							<th width="90">宿舍电话</th>
							<th width="70">宿舍状态</th>
							<th width="100">操作</th>
						</tr>
					</thead>
					<?php 
						
						include("db_conn.php");
						@$dor_no_head=$_POST["dor_no_head"];
						$sql1="select * from dormitory where dor_no like '%{$_POST['dor_no_head']}%'or dor_head like '%{$_POST['dor_no_head']}%'";
						$query1=mysql_query($sql1);
						
						
						
						
						while($row1=mysql_fetch_array($query1))
						if($row1["dor_del"]==1)
						{
						{
					?>
					<tbody>
						<tr class="text-c">
							<td><input type="checkbox" value="1" name=""></td>
							<td><?php echo ($row1["dor_no"]);?></td>
							<td><?php echo ($row1["dor_head"]);?></td>
							<td><?php echo ($row1["dor_per"]);?></td>
							<td><?php echo ($row1["dor_tel"]);?></td>
							<td class="td-status">
								<span class="label label-success radius">
									<?php echo ($row1["dor_state"]);?></span></td>
							<td class="td-manage">
								
								<!--<a style="text-decoration:none" onClick="member_stop(this,'10001')" href="javascript:;" title="停用">
									<i class="Hui-iconfont">&#xe631;</i>
								</a> -->
								
									<a title="还原" href="javascript:;" onclick="member_edit('确定还原此宿舍吗？','<?php echo"dormitory_recycle_bak.php?dor_id={$row['dor_id']}"?>','4','','510')" class="ml-5" style="text-decoration:none">
									<i class="Hui-iconfont">&#xe66b;</i>
								</a> 

										<a title="删除" href="javascript:;" onclick="member_edit('确定要删除这个宿舍吗？','<?php echo"dormitory_recycle_del.php?dor_id={$row['dor_id']}"?>','5','','450')" class="ml-5" style="text-decoration:none">
									<i class="Hui-iconfont">&#xe609</i>
								</a>			
							</td>
							
							
							
						</tr>
					 </tbody>
					<?php
					}
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