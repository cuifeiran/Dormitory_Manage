<?php	
include("db_conn.php");
include("public/meta.php");
$dor_id=$_POST['dor_id'];

       
       if(!$lnk)
{
	echo"fail";
}
else 
{ 
		
     $sql="update dormitory set dor_del=1 where dor_id={$dor_id}";
     $result=@mysql_query($sql,$lnk).mysql_errno($lnk).mysql_error($lnk);
    if(!$result)
    	{
    		echo"<i class='Hui-iconfont'>&#xe688;</i>";
    		echo"删除失败 ".mysql_errno($lnk).mysql_error($lnk);
    		
    	}
    	else 
     	{
     	echo"<i class='Hui-iconfont'>&#xe68e;</i>";
  		echo"删除成功 ";
  		
     	
    	}
    
}
?>