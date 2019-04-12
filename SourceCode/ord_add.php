<?php	
require_once("db_conn.php");
include("public/meta.php");
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
		
        $query="insert into orders values('','$order_dor_no','$order_bed', '$order_stu_no','$order_stu_name','$order_time')";
      
        @$result=mysql_query($query,$lnk).mysql_errno($query).mysql_error($query);

 
 
 
    if(!$result)
    	{   echo"<a class='Hui-iconfont'>&#xe688;</a>";
    	    echo"宿舍号或学号不存在。";
    		
    		
    	}
    	else 
     	{
     		echo"<i class='Hui-iconfont'>&#xe68e;</i>";
  		echo"登记成功！ ";
    	}
    
}
?>