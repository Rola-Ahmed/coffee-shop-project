<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<!--<form action="" method="post">
	Milk Type:<br>
	<input type="text" name="MilkType"><br>
  Cost:<br>
	<input type="text" name="Cost" ><br>
	<input type="submit" name="submit" value="insert">
</form>
-->


<body>
    <div class="container">
        <h1 class="page-header text-center"> Add drink </h1>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span></span> Add drink </h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <!-- By3ml action lana user press login button -->
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="drinkname" type="text" name="drinkname"
                                        autofocus >
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="cost" type="text" name="cost"
                                        autofocus >
                                </div>
                                
                                 <div class="form-group">
                                    <input class="form-control" placeholder="description" type="text" name="description"
                                        autofocus >
                                </div>
                                <div class="form-group">
                                    
                                    <select name="drinktype" id="drinktype">
  <option value="1">traditional coffee</option>
  <option value="2">customized coffee</option>

</select>
                                </div>
                                    <input type="file" name="image"><br><br>

                              
                                <button type="submit" name="submit"
                                    class="btn btn-lg btn-primary btn-block"><span></span> Insert </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
                
<?php 
if (isset($_POST['submit']))
{
	include "dbclassDrink.php";
    
     $image=$_FILES['image']['name'];
    $target="image/..".$image;
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    
	$drinkname=$_POST['drinkname'];
	$description=$_POST['description'];
	$cost=$_POST['cost'];
    	$drinktype=$_POST['drinktype'];

   // if($_POST['drinktype']== "traditional coffee")
    //{$drinktype=1;}
    //else
    //{ $drinktype=2;}

$obj=new Database();
$obj->saveRecords($drinkname,$cost,$image,$description,$drinktype);
}
?>

            </div>
        </div>
    </div>
</body>

