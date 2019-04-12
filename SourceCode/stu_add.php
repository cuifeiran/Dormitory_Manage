<?php	
require_once("db_conn.php");
include("public/meta.php");

$stu_no = $_POST['stu_no'];
$stu_name = $_POST['stu_name'];
$stu_class = $_POST['stu_class'];
$stu_dep = $_POST['stu_dep'];
$stu_tel 	= $_POST['stu_tel'];
$stu_del 	= $_POST['stu_del'];

       if(!$lnk)
{
	echo"fail";
}
else 
{ 
		
        $query="insert into student values('','$stu_no','$stu_name', '$stu_dep','$stu_class','$stu_tel','$stu_del')";
        @$result=mysql_query($query,$lnk).mysql_errno($query).mysql_error($query);
 
 
 
 
    if(!$result)
    	{   echo"<a class='Hui-iconfont'>&#xe688;</a>";
    	    echo"有相同学生！请清理回收站或检查学生学号！";
    		
    	}
    	else 
     	{
     		echo"<i class='Hui-iconfont'>&#xe68e;</i>";
  		echo"登记成功 ";
    	}
    
}
?>