<?php

	class Milk
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
		    $query = "SELECT * FROM milkoptions";
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

public function chooseRecord()
		{
			

if(isset($_POST['submit']) && $_POST['checkbox'])
{
	$i=0;
	var_dump($_POST['checkbox']);
    foreach ($_POST['checkbox'] as $id ) 
    {
		$data = explode(',',$id);
		    $query = "INSERT INTO choosenmilk (id,milkoption,cost) VALUES ('','$data[1]','$data[2]')";
		    $sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:choosetypeofmilk.php?msg3=choosen");
		}else{
			echo "Record not choosen try again";
		    }
		$i++;
		}
	
	}
}
	}
?>