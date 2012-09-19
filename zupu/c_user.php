<?php 
$username=$_POST['username'];
$password=$_POST['password'];

require("connect.php");
if( empty($username))
   echo("<script type = 'text/javascript'> alert('用户名为空) ;". " location.href='index.php'; </script> ");
  
if( empty ($password) )
   echo ("<script type = 'text/javascript'> alert('密码为空') ; ". " location.href='index.php'; </script>" );
 $sql = "insert into user(username,password) values('$username','$password') ";
$result=mysql_db_query('zupu',$sql) or die('发送请求失败'.mysql_error());
$num=mysql_affected_rows();



if($num==1)
{
    echo ("<script type = 'text/javascript'> alert('用户注册成功');". " location.href='index.php';</script> ");
  mysql_close();
  exit;
  }
  else
  {
  

  echo("<script type='text/javascript'> alert('用户注册失败');". " location.href='user.php';</script>");
 
  
  }


?>