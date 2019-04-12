<?php	
include("db_conn.php");
include("public/meta.php");
$admin_id=$_POST['admin_id'];
       if(!$lnk)
{
	echo"fail";
}
else 
{ 
		
     $sql="update admin set pwd='202cb962ac59075b964b07152d234b70' where admin_id='$admin_id'";
     @$result=mysql_query($sql,$lnk).mysql_errno($sql).mysql_error($sql);
    if(!$result)
    	{
    		echo"<i class='Hui-iconfont'>&#xe688;</i>";
    		 
    		echo"修改失败 ";
    		
    	}
    	else 
     	{
  		echo"<i class='Hui-iconfont'>&#xe68e;</i>";
  		echo"修改成功 ";
     	
    	}
    
}
?>