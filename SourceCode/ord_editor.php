<?php	
include("db_conn.php");
include("public/meta.php");
$order_id=$_POST['order_id'];
$order_dor_no = $_POST['order_dor_no'];
$order_bed = $_POST['order_bed'];
$order_stu_no = $_POST['order_stu_no'];
$order_stu_name = $_POST['order_stu_name'];
$order_time= $_POST['order_time'];

       if(!$lnk)
{
	echo"fail";
}
else 
{ 
		
     $sql="update orders set order_dor_no ='{$order_dor_no}',order_bed='{$order_bed}',order_stu_no='{$order_stu_no}',order_stu_name='{$order_stu_name}',order_time='{$order_time}' where order_id={$order_id}";
     @$result=mysql_query($sql,$lnk).mysql_errno($sql).mysql_error($sql);
    if(!$result)
    	{
    		echo"<i class='Hui-iconfont'>&#xe688;</i>";
    		 echo"有相同的入住信息，或者宿舍号、学号不存在。";
    		echo"修改失败 ";
    		
    	}
    	else 
     	{
  		echo"<i class='Hui-iconfont'>&#xe68e;</i>";
  		echo"修改成功 ";
     	
    	}
    
}
?>