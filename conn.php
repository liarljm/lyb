<?php
$conn=@mysql_connect("localhost","root","") or die("db connect error!");
mysql_select_db("leave_message69",$conn);
// if($flag){
// 	echo '数据库连接成功';
// 	}else{
// 	echo '数据库连接失败';
// 	}
	mysql_query("set names utf8");
?>