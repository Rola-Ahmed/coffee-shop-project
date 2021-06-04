

<?php
class DB{
public static function connect(){
$servername="localhost";
$username="root";
$password="";
$DB="coffeeshopse";
$conn=mysqli_connect($servername,$username,$password,$DB);
$count=0;
if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}
    return $conn;
	}
}
class user
{ 
    
   
           public function SignUp($UName,$Email,$Password,$ut)
    {
	    $uname=$UName;
	    $password=$Password;
	    $email=$Email;
	  $ut=$ut;
    	$conn = DB::connect();
    	$sql="INSERT INTO user (id,name,email,password,usertype) VALUES(' ','$uname','$email','$password','$ut')";
    	echo $conn->error;
		if($conn->query($sql)==true)
	    {
	     // echo "<meta http-equiv=\"refresh\"content=\"0;URL=SignUp.php\">";
            		header('location:homepage.php');

	    }
	    else 
	    {
	      echo "Error: ".$sql."<br>".$conn->error;
	    }
    }
    
    

 
}
 