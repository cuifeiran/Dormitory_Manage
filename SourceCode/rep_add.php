<?php	
require_once("db_conn.php");
include("public/meta.php");


$repair_dor_no = $_POST['repair_dor_no'];
$repair_reason = $_POST['repair_reason'];
$repair_stu_no = $_POST['repair_stu_no'];
$repair_stu_name = $_POST['repair_stu_name'];
$repair_time= $_POST['repair_time'];
$repair_result= $_POST['repair_result'];

       
       if(!$lnk)
{
	echo"fail";
}
else 
{ 
		
        $query="insert into repairs values('','$repair_dor_no','$repair_reason', '$repair_stu_no','$repair_stu_name','$repair_time','$repair_result')";
        @$result=mysql_query($query,$lnk).mysql_errno($query).mysql_error($query);
 
 
 
 
    if(!$result)
    	{   echo"<a class='Hui-iconfont'>&#xe688;</a>";
    	    echo"有相同的入住信息，或者宿舍号、学号不存在。";
    	
    	}
    	else 
     	{
     		echo"<i class='Hui-iconfont'>&#xe68e;</i>";
  		echo"登记成功！ ";
    	}
    
}
?>