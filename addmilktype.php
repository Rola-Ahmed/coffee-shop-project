<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>


<body>
    <div class="container">
        <h1 class="page-header text-center"> Add Type of milk </h1>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span></span> MilkType </h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="">
                            <!-- By3ml action lana user press login button -->
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="MilkType" type="text" name="MilkType"
                                        autofocus >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Cost" type="text" name="Cost"
                                        >
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
	include "dbclass.php";
	$MilkType=$_POST['MilkType'];
	$Cost=$_POST['Cost'];

$obj=new Database();
$obj->saveRecords($MilkType,$Cost);
}
?>

            </div>
        </div>
    </div>
</body>

