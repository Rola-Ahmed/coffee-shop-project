<?php
  
  // Include database file
  include 'additionalcond.php';

  $customerObj = new Milk();

  $customers = $customerObj->displayData(); 

  $customerObj->chooseRecord();

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

<div class="card text-center" style="padding:15px;">
  </div><br><br> 

<div class="container">
  <?php
    if (isset($_GET['msg3']) == "choosen") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Record choosen successfully
            </div>";
    }
  if(isset($_POST['i']))
          {
            $i=$_POST['i'];
            $cart= new drinktype();
            $cart->addcart($i);
            ?>
  <h2>Condiment Types
  </h2>
   <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>CondimentType</th>
        <th>Cost</th>
        <th>Condiment to be choosen</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          foreach ($customers as $customer) {
        ?>
        <tr>
          <td><?php echo $customer['id'] ?></td>
          <td><?php echo $customer['condimenttype'] ?></td>
          <td><?php echo $customer['cost'] ?></td>
          <td>
 
      <form action="" method="POST"> 
          <?php echo '<input type="hidden" name="i" value="'.$i.'">' ?>
           <td><input name='checkbox[]' type='checkbox' id='checkbox[]' value='<?php echo $customer['id']; ?>,<?php echo $customer['condimenttype'];?>,<?php echo $customer['cost'];?>'></td></tr>
  
      <?php
       } ?>

</tbody>
  </table>

<input type="submit" name="submit" id="submit" value="submit"><br>
</form>

<?php } ?>
</div>
</body>
</html>
