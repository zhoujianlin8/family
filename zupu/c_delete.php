<?php
$username=$_COOKIE['username'];
$id=$_POST ['id'];
if($username=='')
{ echo ("<script type = 'text/javascript'> alert('没有登录');". " location.href='welcome.php';</script> ");}
require('connect.php');
$sql="select * from user where username='$username'";
$result=mysql_query($sql) or die('发送查询失败'.mysql_error());
$num=mysql_num_rows($result) or die(mysql_error());

if($num=='fasle')

    echo ("<script type = 'text/javascript'> alert('没有登录');". " location.href='welcome.php';</script> ");
	else
	{
//$id=$_POST['id'];

//require('connect.php');
$sql="delete  from father where f_id = '$id'";
$result=mysql_query($sql) or die('发送查询错误'.mysql_error());
$num=mysql_affected_rows();
if($num==1)
echo "<script type='text/javascript'>alert('删除成功'); ". " location.href='welcome.php';</script>";

else 
echo "<script type='text/javascript'>alert('删除失败'); ". " location.href='welcome.php';
</script>";


}
mysql_close();
?>