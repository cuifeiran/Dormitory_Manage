<?php	
include("db_conn.php");
include("public/meta.php");
$repair_id = $_POST['repair_id'];
$repair_dor_no = $_POST['repair_dor_no'];
$repair_reason = $_POST['repair_reason'];
$repair_stu_no = $_POST['repair_stu_no'];
$repair_stu_name = $_POST['repair_stu_name'];
$repair_result= $_POST['repair_result'];
$repair_per= $_POST['repair_per'];
$repair_time= $_POST['repair_time'];


       if(!$lnk)
{
	echo"fail";
}
else 
{ 
		
     $sql="update repairs set repair_dor_no ='{$repair_dor_no}',repair_reason='{$repair_reason}',repair_stu_no='{$repair_stu_no}',repair_stu_name='{$repair_stu_name}',repair_result='{$repair_result}',repair_per='{$repair_per}',repair_time='{$repair_time}' where repair_id={$repair_id}";
     @$result=mysql_query($sql,$lnk).mysql_errno($sql).mysql_error($sql);
    if(!$result)
    	{
    		echo"<i class='Hui-iconfont'>&#xe688;</i>";
    		 echo"有相同的损坏信息，或者宿舍号、学号不存在。";
    	}
    	else 
     	{
  		echo"<i class='Hui-iconfont'>&#xe68e;</i>";
  		echo"修改成功 ";
     	
    	}
    
}
?>