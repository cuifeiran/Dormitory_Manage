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
		
     $sql="update student set stu_del =0 where stu_id={$stu_id}";
    $result=@mysql_query($sql,$lnk).mysql_errno($lnk).mysql_error($lnk);
    if(!$result)
    	{
    		echo"<i class='Hui-iconfont'>&#xe688;</i>";
    		echo"还原失败 ".mysql_errno($lnk).mysql_error($lnk);
    		
    	}
    	else 
     	{
     	echo"<i class='Hui-iconfont'>&#xe68e;</i>";
  		echo"还原成功 ";
  		
     	
    	}
    
}
?>