<?php
$father=$_POST['f_name'];
$child=$_POST['f_child'];
require('connect.php');
$sqlStr="insert into father (f_name,f_child) values('$father','$child')";
$result=mysql_query($sqlStr) or die('添加失败'.mysql_error()) ;
$num= mysql_affected_rows();
if($num==1)
echo "<script type='text/javascript'>alert('添加成功'); ". " location.href='display.php?f_name=$father';</script>";

else
echo "<script type='text/javascript'>alert('添加失败'); ". " location.href='';</script>";
mysql_close();
?>


