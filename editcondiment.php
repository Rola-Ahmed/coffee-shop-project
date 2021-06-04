<?php
  
  // Include database file
  include 'editcond.php';

  $customerObj = new Customers();
     

?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>


<div class="container">
  <?php
    if (isset($_GET['msg2']) == "update") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Your Registration updated successfully
            </div>";
    }
  ?>
  <h2>View Records
   </h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>CondimentType</th>
        <th>Cost</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          $customers = $customerObj->displayData(); 
          foreach ($customers as $customer) {
        ?>
        <tr>
          <td><?php echo $customer['id'] ?></td>
          <td><?php echo $customer['condimenttype'] ?></td>
          <td><?php echo $customer['cost'] ?></td>
          <td>
            <a href="edit2.php?editId=<?php echo $customer['id'] ?>" style="color:green">
              <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
           
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>