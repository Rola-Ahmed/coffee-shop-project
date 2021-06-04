<?php

	class Customers
	{
		private $servername = "localhost";
		private $username   = "root";
		private $password   = "";
		private $database   = "CoffeeShop";
		public  $con;


		// Database Connection 
		public function __construct()
		{
		    $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
		    if(mysqli_connect_error()) {
			 trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
		    }else{
			return $this->con;
		    }
		}

		public function displayData()
		{
		    $query = "SELECT * FROM user";
		    $result = $this->con->query($query);
		if ($result->num_rows > 0) {
		    $data = array();
		    while ($row = $result->fetch_assoc()) {
		    	if($row["usertype"]==2)
		    	{
		           $data[] = $row;
		    	}
		    }
			 return $data;
		    }else{
			 echo "No found records";
		    }
		}

	
		// Delete customer data from customer table
		public function deleteRecord($id)
		{
		    $query = "DELETE FROM user WHERE id = '$id'";
		    $sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:index.php?msg3=delete");
		}else{
			echo "Record does not delete try again";
		    }
		}

	}
?>