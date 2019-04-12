<!--_meta 作为公共模版分离出去-->
<?php include("public/meta.php") ?>
<!--/meta 作为公共模版分离出去-->

<title>编辑信息 </title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
	<?php include("db_conn.php");
		$sql = "select * from repairs where repair_id={$_GET['repair_id']}";
		$query=mysql_query($sql);
		$row=mysql_fetch_array($query);
		$repair_id=$_GET['repair_id'];
	?>
<article class="cl pd-20">
	
	
	<form action="rep_editor.php" method="post" class="form form-horizontal" >
		<!--宿舍ID-->
	<input type="hidden" name="repair_id" value="<?php echo $row['repair_id'];?>"/>
		
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>宿舍号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" disabled="disabled" class="input-text" value="<?php echo ($row['repair_dor_no']);?>" placeholder="<?php echo ($row['repair_dor_no']);?>" id="repair_dor_no" name="repair_dor_no">
			</div>
		</div>
	
		
		
			<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>报修原因：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" disabled="disabled"  class="input-text" value="<?php echo ($row['repair_reason']);?>" placeholder="<?php echo ($row['repair_reason']);?>" name="repair_reason" id="repair_reason">
			</div>
		</div>
			<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>学号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" disabled="disabled" class="input-text" value="<?php echo ($row['repair_stu_no']);?>" placeholder="<?php echo ($row['repair_stu_no']);?>" id="repair_stu_no" name="repair_stu_no">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>姓名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text"disabled="disabled"  class="input-text" value="<?php echo ($row['repair_stu_name']);?>" placeholder="<?php echo ($row['repair_stu_name']);?>" id="repair_stu_name" name="repair_stu_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>处理结果：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text"disabled="disabled"  class="input-text" value="<?php echo ($row['repair_result']);?>" placeholder="<?php echo ($row['repair_result']);?>" id="repair_result" name="repair_result">
			</div>
		</div>
		
	
	
	<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>处理人：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" disabled="disabled" class="input-text"  value="<?php echo ($row['repair_per']);?>" placeholder="<?php echo ($row['repair_per']);?>" id="repair_per" name="repair_per">
			</div>
		</div>
	
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*&nbsp;&nbsp;</span>登记时间：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text"disabled="disabled" class="input-text" value="<?php echo ($row['repair_time']);?>" placeholder="<?php echo ($row['repair_time']);?>" id="repair_time" name="repair_time">
			</div>
		</div>
	</br></br>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;确认删除&nbsp;">
					
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="static/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-member-add").validate({
		rules:{
			username:{
				required:true,
				minlength:2,
				maxlength:16
			},
			sex:{
				required:true,
			},
			mobile:{
				required:true,
				isMobile:true,
			},
			email:{
				required:true,
				email:true,
			},
			uploadfile:{
				required:true,
			},
			
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>