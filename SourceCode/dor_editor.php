<?php	
include("db_conn.php");
include("public/meta.php");
$dor_id=$_POST['dor_id'];
$dor_no = $_POST['dor_no'];
$dor_head = $_POST['dor_head'];
$dor_tel = $_POST['dor_tel'];
$dor_per = $_POST['dor_per'];
$dor_state 	= $_POST['state'];

       if(!$lnk)
{
	echo"fail";
}
else 
{ 
		
     $sql="update dormitory set dor_no ='{$dor_no}',dor_head='{$dor_head}',dor_per='{$dor_per}',dor_tel='{$dor_tel}',dor_state='{$dor_state}' where dor_id={$dor_id}";
     @$result=mysql_query($sql,$lnk).mysql_errno($sql).mysql_error($sql);
    if(!$result)
    	{
    		echo"<i class='Hui-iconfont'>&#xe688;</i>";
    		 echo"回收站中有相同宿舍！请先清理回收站！";
    		echo"修改失败 ";
    		
    	}
    	else 
     	{
  		echo"<i class='Hui-iconfont'>&#xe68e;</i>";
  		echo"修改成功 ";
     	
    	}
    
}
?>