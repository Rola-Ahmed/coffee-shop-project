<?php
  
  // Include database file
  include 'editmilk.php';

  $customerObj = new Customers();
 if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
      $deleteId = $_GET['deleteId'];
      $customerObj->deleteRecord($deleteId);
  }
     

?>