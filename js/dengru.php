<?php
header("Content-type:text/html;charset=utf-8");
$name = $_POST["phone"];
$pwd = $_POST["password"];
$conn = mysql_connect("localhost","root","root");
mysql_select_db("3000",$conn);
$result = mysql_query("select * from biaoo where name='$name' and pwd='$pwd'",$conn);
$rows = mysql_num_rows($result);
if(mysql_num_rows($result)==1){
	echo "1";
}
else{
	echo "0";
}
?>
