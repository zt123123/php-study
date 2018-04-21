<?php

include_once 'db.php';

 $name=$_POST['name'];
 $price=$_POST['price'];
 $status=$_POST['status']; 


$sql="insert into goods values(null, '$name', $price, $status)";

// echo $sql;

$res=mysql_query($sql);

if($res){
	echo json_encode(["desc"=>'insert ok']);
}


?>