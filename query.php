<?php

header("Content-Type:text/html;charset=utf-8");
// class Person
// {	
// 	public $like;
// 	private $name;
// 	private $age;
// 	protected $money;
// 	function __construct($name,$age,$money)
// 	{
// 		$this->name=$name;
// 		$this->age=$age;
// 		$this->like="basketball";
// 		$this->money="1000";
// 	}

// 	public function sayHello(){
// 		echo "My name is ".$this->name." I am ".$this->age;
// 	}
// 	public function getName()
// 	{
// 		return $this->name;
// 	}
// }

// class Student extends Person
// {
//     public function __construct($name="aa",$age=23,$money=100,$sex='女')
//     {
//         parent::__construct($name,$age,$money);
//         $this->sex=$sex;
//     }
//     public function sayHello(){
//     	parent::sayHello();
//     	echo "My sex is ".$this->sex;
//     }
//     public function getLike()
//     {
//     	echo $this->like;
//     }    
//     public function getMoney()
//     {
//     	echo $this->money;
//     }
// }

// $person=new Person("张天",23);
// $person->sayHello();
// echo $person->getName();

// $stu=new Student();
// $stu->sayHello();
// echo $stu->like;
// $stu->getMoney();
// echo $stu->like;
// echo $stu->name;
// echo $stu->age;
// echo $stu->money;
// $stu->getMoney();
// $stu->getLike();

/**
 * summary
 */

// abstract class Person{
// 	function say(){}
// }

// class Student extends Person
// {
//     /**
//      * summary
//      */
//     public $name="aaa";
//     public function __construct()
//     {
//         echo '实例化';
//     }
//     function say(){
//     	echo $this->name;
//     }
//     public function __destruct()
//     {
//         echo '销毁';
//         echo $this->name=null;
//         echo $this->name;
//     }
// }


// $stu=new Student();
// $stu->say();
// echo '---'.$stu->name;

// interface Person{
// 	const PI=3.14;
// 	function say();
// }

// interface Study{
// 	function study();
// }


// class Student implements Person,Study
// {
// 	const AA=3.1415;
//     public function __construct()
//     {
        
//     }
//     function say(){
// 		echo self::AA;
// 		// echo 'speak';
//     }
// 	function study(){
// 		echo 'study';
// 	}
// 	static function eat(){
// 		echo 'eat';
// 	}
// }

// $stu=new Student();
// $stu->say();
// echo '<hr>';
// $stu->study();
// echo '<hr>';
// echo $stu::PI;
// $stu->eat();
// Student::eat();
// echo Student::AA;
// echo "------".$stu::AA;
?>

<?php
include_once 'db.php';

$arr= array();
$sql="";
if(isset($_POST['id'])){
	$id=$_POST['id'];
	$sql="select * from goods where id=$id";
}else{
	$sql='select * from goods';
}

$res=mysql_query($sql);
while ($row=mysql_fetch_array($res)) {
    array_push($arr, array("id"=>$row['id'],"name"=>$row['name'],"price"=>$row['price'],"status"=>$row['status']));
}

// print_r($arr);

if($con){
	// echo 'connect success';
}else {
	// echo "error";
}


echo json_encode($arr);

?>