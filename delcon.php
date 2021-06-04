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

	
		// Fetch customer records for show listing
		public function displayData()
		{
		    $query = "SELECT * FROM addcondiment";
		    $result = $this->con->query($query);
		if ($result->num_rows > 0) {
		    $data = array();
		    while ($row = $result->fetch_assoc()) {
		           $data[] = $row;
		    }
			 return $data;
		    }else{
			 echo "No found records";
		    }
		}

		// Fetch single data for edit from customer table
		public function displyaRecordById($id)
		{
		    $query = "SELECT * FROM addcondiment WHERE id = '$id'";
		    $result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		    }else{
			echo "Record not found";
		    }
		}

		// Update customer data into customer table
		public function updateRecord($postData)
		{
		    $CondimentType = $this->con->real_escape_string($_POST['condimenttype']);
		    $Cost = $this->con->real_escape_string($_POST['cost']);
		    $id = $this->con->real_escape_string($_POST['id']);
		if (!empty($id) && !empty($postData)) {
			$query = "UPDATE addcondiment SET condimenttype = '$CondimentType', cost = '$Cost'WHERE id = '$id'";
			$sql = $this->con->query($query);
			if ($sql==true) {
			    header("Location:deletecondiments.php?msg2=update");
			}else{
			    echo "Registration updated failed try again!";
			}
		    }
			
		}


		// Delete customer data from customer table
		public function deleteRecord($id)
		{
		    $query = "DELETE FROM addcondiment WHERE id = '$id'";
		    $sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:deletecondiments.php?msg3=delete");
		}else{
			echo "Record does not delete try again";
		    }
		}

	}
?>
