<?php	
include("db_conn.php");
include("public/meta.php");
$stu_id=$_POST['stu_id'];
$stu_no = $_POST['stu_no'];
$stu_name = $_POST['stu_name'];
$stu_class = $_POST['stu_class'];
$stu_dep = $_POST['stu_dep'];
$stu_tel 	= $_POST['stu_tel'];

       if(!$lnk)
{
	echo"fail";
}
else 
{ 
		
     $sql="update student set stu_no ='{$stu_no}',stu_name='{$stu_name}',stu_dep='{$stu_dep}',stu_class='{$stu_class}',stu_tel='{$stu_tel}' where stu_id={$stu_id}";
     $result=mysql_query($sql,$lnk).mysql_errno($sql).mysql_error($sql);
    if(!$result)
    	{
    		echo"<i class='Hui-iconfont'>&#xe688;</i>";
    		 echo"回收站中有相同学生！请先清理回收站！";
    		echo"修改失败 ";
    		
    	}
    	else 
     	{
  		echo"<i class='Hui-iconfont'>&#xe68e;</i>";
  		echo"修改成功 ";
     	
    	}
    
}
?>