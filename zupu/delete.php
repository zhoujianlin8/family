

<form action="c_delete.php" method="post">


<?php



require('connect.php');

$sql="select * from father ";
$result=mysql_db_query('zupu',$sql) or die ('请求失败'.mysql_error());


//print_r($arr);
while($arr=mysql_fetch_array($result)){
  $child=$arr['f_child'];
  $fa=$arr['f_name'];
  $id=$arr['f_id'];
  echo "<table><tr><td><input type='checkbox' value='$id' name='id'/></td><td>父亲:<td><td>$fa</td></tr>
        <tr><td></td><td>孩子:<td><td>$child</td></tr></table> " ;
  

}
mysql_close();
?>
<div id="delete"><input type="submit" value="删除"/></div>
</form>
