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
public function saveRecords($drinkname,$cost,$image,$description,$drinktype)
{
   
    
	$conn=$this->connect();
	mysqli_query($conn,"insert into drinkmenu (drinkname,cost,image,description,drinktype)values('$drinkname','$cost','$image','$description','$drinktype')") or die(mysqli_error($conn));
	echo "<div style='padding:20px; background-color:#009970;'> Data Addedd SuccessFully</div>";
}
}

?>