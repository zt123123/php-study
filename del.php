<?php

include_once 'db.php';
$id=$_POST['id'];
$sql="delete from goods where id=$id";
$res=mysql_query($sql);
if($res){
	echo json_encode(["desc"=>'delete ok']);
}
?>