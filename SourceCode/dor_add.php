<?php	
require_once("db_conn.php");
include("public/meta.php");
$dor_no = $_POST['dor_no'];
$dor_head = $_POST['dor_head'];
$dor_tel = $_POST['dor_tel'];
$dor_per = $_POST['dor_per'];
$state 	= $_POST['state'];
$dor_del 	= $_POST['dor_del'];

       
       if(!$lnk)
{
	echo"fail";
}
else 
{ 
		
        $query="insert into dormitory values('','$dor_no','$dor_head', '$dor_per','$dor_tel','$state','$dor_del')";
        @$result=mysql_query($query,$lnk).mysql_errno($query).mysql_error($query);
 
 
 
 
    if(!$result)
    	{   echo"<a class='Hui-iconfont'>&#xe688;</a>";
    	    echo"有相同宿舍！请清理回收站或检查宿舍编号！";
    		
    		
    	}
    	else 
     	{
     		echo"<i class='Hui-iconfont'>&#xe68e;</i>";
  		echo"添加成功 ";
    	}
    
}
?>