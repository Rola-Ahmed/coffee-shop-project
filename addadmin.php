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
                                    <input class="form-control" placeholder="Username" type="text" name="username"
                                        autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="email" type="text" name="Email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" type="password" name="password"
                                        required>
                                </div>
                               

                              
                                <button type="submit" name="submit"
                                    class="btn btn-lg btn-primary btn-block"><span></span> Insert </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
                
<?php 
if (isset($_POST['submit']))
{
	include "dbclassAdmin.php";
    
 $id='';
	  $uN=$_POST['username'];
  $email=$_POST["Email"];
  $P=$_POST['password'];

                     $ut=2;


$obj=new Database();
$obj->saveRecords($id,$uN,$email,$P,$ut);
}
?>

            </div>
        </div>
    </div>
</body>

