<?php
class drinktype
{
  private $servername = "localhost";
  private $username   = "root";
  private $password   = "";
  private $database   = "MIUCoffee";
  public  $con;
  private $i;
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
        $query = "SELECT * FROM drinkmenu where drinktype=2";
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
    public function addcart($i)
    {
      $idu=0;
      $Query = "SELECT * FROM drinkmenu where id='$i'";
    $ExecQuery =$this->con->query($Query);
   
   if ($ExecQuery->num_rows > 0) 
  {      
    while($row = $ExecQuery->fetch_assoc()) 
    {
      $cost=$row['cost'];
    }
  }
  $Query1 = "SELECT * FROM cart1";
    $ExecQuery1 =$this->con->query($Query1);
   $count=0;
   if ($ExecQuery1->num_rows > 0) 
  {      
    while($row1 = $ExecQuery1->fetch_assoc()) 
    {
      if($i==$row1['IDDrink'])
      {
        $count++;
      }
    }
  }
  if($count==0)
  {
  $Query4 ="INSERT into cart1 (id,IDUser,IDDrink,cost) values ('','$idu','$i','$cost')";
  $sql4 = $this->con->query($Query4);
  if ($sql4==true) {
      
    }else{
      echo "Record not choosen try again";
        }
      }
}

}
  class Milk
  {
    private $servername = "localhost";
    private $username   = "root";
    private $password   = "";
    private $database   = "MIUCoffee";
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

public function chooseRecord()
    {
      

if(isset($_POST['submit']) && $_POST['checkbox'] && $_POST['i'])
{ 
  $iDr=$_POST['i'];
  $i=0;
  var_dump($_POST['checkbox']);
   $Query = "SELECT * FROM drinkmenu where id='$iDr'";
    $ExecQuery =$this->con->query($Query);
   
   if ($ExecQuery->num_rows > 0) 
  {      
    while($row = $ExecQuery->fetch_assoc()) 
    {
      $cost=$row['cost'];
    }
  }
    foreach ($_POST['checkbox'] as $id ) 
    {
      
    $data = explode(',',$id);
    $cost=$cost+$data[2];
          $query = "INSERT INTO choosencond (id,condimenttype,cost,IDDrink) VALUES ('','$data[0]','$data[2]','$iDr')";
        $sql = $this->con->query($query);
    if ($sql==true) {
      header("Location:addadditionalcon.php?msg3=choosen");
    }else{
      echo "Record not choosen try again";
        }
    $i++;
    }
    $query2 = "UPDATE cart1 SET cost='$cost' WHERE IDDrink='$iDr'";
        $sql1 = $this->con->query($query2);
    if ($sql1==true) {
      
    }else{
      
        }
  
  }
}
  }
?>