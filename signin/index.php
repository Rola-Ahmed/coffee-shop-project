<?php
	//start session
	session_start();

	//redirect if logged in
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
?>
<!DOCTYPE html>
<title> LogIn Form </title>
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <div class="container">
        <h1 class="page-header text-center"> Login Here </h1>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span></span> Login </h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="login.php">
                            <!-- By3ml action lana user press login button -->
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" type="text" name="username"
                                        autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" type="password" name="password"
                                        required>
                                </div>
                                <button type="submit" name="login"
                                    class="btn btn-lg btn-primary btn-block"><span></span> Login </button>
                            </fieldset>
                        </form>
                        <p class="page-header text-center"> Not registered yet? <a href="SignUp.php"> Register Here </a>
                        </p> <!-- hyroh l sign up -->
                    </div>
                </div>
                <?php
		    	if(isset($_SESSION['message'])){
		    		?>
                <div class="alert alert-info text-center">
                    <?php echo $_SESSION['message']; ?>
                </div>
                <?php
		    		unset($_SESSION['message']);
		    	}
		    ?>
            </div>
        </div>
    </div>
</body>

</html>