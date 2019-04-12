<?php	
require_once("db_conn.php");
include("public/meta.php");

$worker_no = $_POST['worker_no'];
$worker_name = $_POST['worker_name'];
$worker_age = $_POST['worker_age'];
$worker_sex = $_POST['worker_sex'];
$worker_tel = $_POST['worker_tel'];
$worker_wage = $_POST['worker_wage'];

       if(!$lnk)
{
	echo"fail";
}
else 
{ 
		
        $query="insert into workers values('','$worker_no','$worker_name', '$worker_age','$worker_sex','$worker_tel','$worker_wage')";
        @$result=mysql_query($query,$lnk).mysql_errno($query).mysql_error($query);
 
 
 
 
    if(!$result)
    	{   echo"<a class='Hui-iconfont'>&#xe688;</a>";
    	    echo"有相同的职工编号！";
    		
    	}
    	else 
     	{
     		echo"<i class='Hui-iconfont'>&#xe68e;</i>";
  		echo"登记成功 ";
    	}
    
}
?>