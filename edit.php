<?php

include_once 'db.php';

$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$status=$_POST['status'];

$sql="update goods SET name='$name',price=$price,status=$status where id=$id";

$res=mysql_query($sql);

if($res){
	echo json_encode(["desc"=>'update ok']);
}
?>