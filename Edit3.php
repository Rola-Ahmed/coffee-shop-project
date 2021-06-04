<?php
  
  // Include database file
  include 'EditDrinks.php';

  $customerObj = new Customers();

  // Edit customer record
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $customer = $customerObj->displyaRecordById($editId);
  }

  // Update Record in customer table
  if(isset($_POST['update'])) {
    $customerObj->updateRecord($_POST);
  }  
    
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>


<div class="container">
  <form action="Edit3.php" method="POST">
    <div class="form-group">
      <label for="name">DrinkName:</label>
      <input type="text" class="form-control" name="drinkname" value="<?php echo $customer['drinkname']; ?>" >
    </div>

    <div class="form-group">
      <label for="text">Description:</label>
      <input type="text" class="form-control" name="description" value="<?php echo $customer['description']; ?>" >
    </div>
    <div class="form-group">
      <label for="text">Cost:</label>
      <input type="text" class="form-control" name="cost" value="<?php echo $customer['cost']; ?>" >
    </div>

    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $customer['id']; ?>">
      <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
    </div>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
