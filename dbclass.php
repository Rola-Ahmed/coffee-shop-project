<?php
class Database
{

var $host="localhost";
var $user="root";
var $pass="";
var $tbname="CoffeeShop";
public function connect()
{

$con=mysqli_connect($this->host,$this->user,$this->pass,$this->tbname);
return $con;

}
public function saveRecords($milk,$cost)
{
	$conn=$this->connect();
	mysqli_query($conn,"insert into milkoptions (milkoption,Cost)values('$milk','$cost')") or die(mysqli_error($conn));
	echo "<div style='padding:20px; background-color:#009970;'> Data Addedd SuccessFully</div>";
}
}

?>