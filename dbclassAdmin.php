<?php
class Database
{

var $host="localhost";
var $user="root";
var $pass="";
var $tbname="coffeeshopse";
public function connect()
{

$con=mysqli_connect($this->host,$this->user,$this->pass,$this->tbname);
return $con;

}
public function saveRecords($id,$name,$email,$password,$usertype)
{

    
	$conn=$this->connect();
	mysqli_query($conn,"insert into user (id,name,email,password,usertype)values(' ','$name','$email','$password','$usertype')") or die(mysqli_error($conn));
	echo "<div style='padding:20px; background-color:#009970;'> Data Addedd SuccessFully</div>";
}
}

?>