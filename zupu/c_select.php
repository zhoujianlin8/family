<?php
$fath=$_POST['father'];
require('connect.php');

$sql="select * from father where f_name = '$fath'";
$result=mysql_db_query('zupu',$sql) or die ('请求失败'.mysql_error());
$num=mysql_num_rows($result);
if($num==0)
{echo("<script type = 'text/javascript'> alert('该父亲不存在');". " location.href='welcome.php';</script> ");}
else{
//print_r($arr);
while($arr=mysql_fetch_array($result)){
  $child=$arr['f_child'];
  echo "孩子:".$child.'<br>';

}
}
mysql_close();
?>

