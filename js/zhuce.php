
<?php
header("Content-type:text/html;charset=utf-8");
$name = $_POST["phone"];
$pwd = $_POST["password"];
$conn = mysql_connect("localhost","root","root");
if(!$conn){
	echo ("连接出错".mysql_error());
	
}else{
	mysql_select_db("3000",$conn);
	$result = mysql_query("select * from biaoo where name='$name'",$conn);
	$rows = mysql_num_rows($result);
if($rows>0){
  mysql_close($conn);
  echo "-1";
 }else{
  $result = mysql_query("insert into biaoo(name,pwd) values('$name','$pwd')",$conn);
  mysql_close($conn);
  if($result!=1){
   echo "0";
  }else{
   echo "1";
  } 
 }
}
?>
