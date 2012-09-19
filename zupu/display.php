<?php
include('head.html')
 ?>
<div id="from">
<form action="delete.php" method="post">


<?php
$father=$_GET['f_name'];


require('connect.php');

$sql="select * from father where f_name='$father'";
$result=mysql_db_query('zupu',$sql) or die ('请求失败'.mysql_error());

echo'父亲：'.$father .'<br>';
//print_r($arr);
while($arr=mysql_fetch_array($result)){
  $child=$arr['f_child'];
  /*$fa=$arr['f_name'];
  $id=$arr['f_id'];
  echo "<table><tr><td><input type='checkbox' value='$id' name='id'/></td><td>父亲:<td><td>$fa</td></tr>
        <tr><td></td><td>孩子:<td><td>$child</td></tr></table> " ;*/
  echo"孩子：".$child.'<br>';

}
mysql_close();
?>

</form>
</div>