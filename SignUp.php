<?php
	//start session
	session_start();
 include "usersignup.php";

	//redirect if logged in
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
?>
<!DOCTYPE html>
<title> sign up Form </title>
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <div class="container">
        <h1 class="page-header text-center"> Sign up Here </h1>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span></span> Sign up </h3>
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
                                    class="btn btn-lg btn-primary btn-block"><span></span> signup </button>
                            </fieldset>
                        </form>
                     
                     <!-- hyroh l sign up -->
                    </div>
                </div>
                <?php
		    
                
                if(isset($_POST['submit']))
{
  $uN=$_POST['username'];
  $email=$_POST["Email"];
  $P=$_POST['password'];
                    $ut=3;
  $user=new user();
  $user->SignUp($uN,$email,$P,$ut);
}
                
		    ?>
            </div>
        </div>
    </div>
</body>

</html>