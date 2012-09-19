<?php 
$username=$_POST['username'];
$password=$_POST['password'];
setcookie('username',$username);
setcookie('password',$password);
require("connect.php");
if( empty($username))
   echo("<script type = 'text/javascript'> alert('用户名为空) ;". " location.href='index.html'; </script> ");
  
if( empty ($password) )
   echo ("<script type = 'text/javascript'> alert('密码为空') ; ". " location.href='index.html'; </script>" );
 $sql = "select * from user where username = '$username' and password = '$password'";
$result=mysql_db_query('zupu',$sql);
//$arr=mysql_fetch_array($result);

 
$num=mysql_num_rows($result);
 
if($num==0)
{
    echo ("<script type = 'text/javascript'> alert('密码或用户名错误');". " location.href='index.php';</script> ");
  mysql_close();
  exit;
  }
  else
  {
  

  echo("<script type='text/javascript'> ". " location.href='welcome.php';</script>");
 
  
  }



?>

