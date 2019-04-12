<?php	
require_once("db_conn.php");
include("public/meta.php");

$username = $_POST['username'];
$pwd = $_POST['pwd'];
$pwd=md5($pwd);

       if(!$lnk)
{
	echo"fail";
}
else 
{ 
		
        $query="insert into admin values('','$username','$pwd')";
        @$result=mysql_query($query,$lnk).mysql_errno($query).mysql_error($query);
 
 
 
 
    if(!$result)
    	{   echo"<a class='Hui-iconfont'>&#xe688;</a>";
    	    echo"有相同的职工编号或不存在此职工编号！";
    		
    	}
    	else 
     	{
     		echo"<i class='Hui-iconfont'>&#xe68e;</i>";
  		echo"登记成功 ";
    	}
    
}
?>