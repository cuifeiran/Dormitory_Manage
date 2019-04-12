 <?php	
include("db_conn.php");
include("public/meta.php");
$stu_id=$_POST['stu_id'];

       
       if(!$lnk)
{
	echo"fail";
}
else 
{ 
		
     $sql="delete from student where stu_id='$stu_id'";
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