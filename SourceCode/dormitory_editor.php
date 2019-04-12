<!--_meta 作为公共模版分离出去-->
<?php include("public/meta.php") ?>
<!--/meta 作为公共模版分离出去-->

<title>编辑宿舍 </title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
	<?php include("db_conn.php");
		$sql = "select * from dormitory where dor_id={$_GET['dor_id']}";
		$query=mysql_query($sql);
		$row=mysql_fetch_array($query); 
	?>
<article class="cl pd-20">
	
	
	<form action="dor_editor.php" method="post" class="form form-horizontal" >
	<input type="hidden" name="dor_id" value="<?php echo $row['dor_id'];?>"/>
		
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>宿舍号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($row['dor_no']);?>" placeholder="<?php echo ($row['dor_no']);?>" id="dor_no" name="dor_no">
			</div>
		</div>
	
		
		
			<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>舍长：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($row['dor_head']);?>" placeholder="<?php echo ($row['dor_head']);?>" name="dor_head" id="dor_head">
			</div>
		</div>
			<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($row['dor_tel']);?>" placeholder="<?php echo ($row['dor_tel']);?>" id="dor_tel" name="dor_tel">
			</div>
		</div>
			
			<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">宿舍人数：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<span class="select-box">
					<?php
					echo" <select class='select'  size='1' name='dor_per'>";
					$typelist=array(1=>"1人间",2=>"2人间",3=>"3人间",4=>"4人间",5=>"5人间",6=>"6人间");	
               foreach ($typelist as $key=>$value){
                   echo"
                  <option value={$key}>{$value}</option>
                   	";
               }
               echo"</select>";
               ?>

				 <!--<select class="select" size="1" name="city">
					<option value="" selected>请选宿舍人数</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="3">4</option>
					<option value="3">5</option>
					<option value="3">6</option>
					<option value="3">7</option>
					<option value="3">8</option>
				</select>-->
				</span>
				 </div>
		</div>
			
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>状态：</label>
			
			
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="state" type="radio" id="using" value="使用中" checked>
					<label for="using">使用中</label>
				</div>
				<div class="radio-box">
					<input name="state" type="radio" id="unusing"value="未使用">
					<label for="unusing">未使用</label>
				</div>
			</div>
			
			
		</div>
		</br>
		</br>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
					
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