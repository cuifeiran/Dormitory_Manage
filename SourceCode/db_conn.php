<?php
$lnk = mysql_connect('localhost', 'root', 'cui1476225') or die ('Not connected : ' . mysql_error());
mysql_select_db('sushe', $lnk) or die ('Can\'t use bl_db : ' .
mysql_error());
mysql_query("set names 'utf-8'");
?>