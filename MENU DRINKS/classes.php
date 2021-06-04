<?php
class DB {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "coffee-shop";
	public $conn;

	function __construct() {
		$this->conn = $this->connectDB();
	}

	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
}

class Product {
	public $id;
	public $drinkname;
	public $image;
	public $cost;
	public $description;
	function __construct($id) {
		$db_handle = new DB();
		$sql="SELECT * FROM drinkmenu WHERE id=".$id;
		/////////////complete DONE////////////////////
		$result = mysqli_query($db_handle->conn,$sql);
		if($row=mysqli_fetch_array($result)){
			$this->id=$row[0];
			$this->drinkname=$row[1];
			$this->image=$row[2];
			$this->cost=$row[3];
			$this->description=$row[4];
			$this->options=array();
		}
	
		$result= mysqli_query($db_handle->conn,$sql);
		while($row=mysqli_fetch_array($result)){
			$this->options[$row['description']]=$row[1];
		}
	}


	static function getAllProducts()	{
		/////////////complete DONE////////////////////
		$products; $i=0;
		$db_handle= new DB();
		$sql="SELECT * FROM drinkmenu";
		$result = mysqli_query($db_handle->conn,$sql);
		while($row=mysqli_fetch_array($result)){
			$products[$i++]=new Product ($row[0]);
		}
		return $products;
	}
}

class Cart{
	public $productsQuantity;
	public $id;
	public $iduser;
	public $drinktype;
	public $addcondimenttype;
	public $drinkcost;
	public $condimentcost;
	public $idmilk;

	function __construct(){
	//	$this->productsQuantity=array();
	/*	$db_handle = new DB();
		$sql="SELECT * FROM cart WHERE id=".$id;
		/////////////complete DONE////////////////////
		$result = mysqli_query($db_handle->conn,$sql);
		if($row=mysqli_fetch_array($result)){
			$this->id=$row[0];
			$this->iduser=$row[1];
			$this->drinktype=$row[2];
			$this->addcondimenttype=$row[3];
			$this->drinkcost=$row[4];
			$this->condimentcost=$row[5];
			$this->idmilk=$row[6];
			$this->options=array();
		} */
		$this->productsQuantity=array();
	}

	function addProduct($productID,$q){		
	/////////////complete DONE////////////////////
	if(array_key_exists((string)$productID,$this->productsQuantity))
	$this->productsQuantity[(string)$productID]+=$q;
	else
	$this->productsQuantity[(string)$productID]=$q;
	}

	function removeProduct($productID){
	/////////////complete DONE////////////////////
	unset($this->productsQuantity[(string)$productID]);
	}

	function emptyCart(){
	/////////////complete DONE////////////////////
	unset($this->productsQuantity);
	$this->productsQuantity=array();
	}
}

?>