<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>WE Club Login</title>
        <meta name="description" content="WE Club Dashboard">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600" rel="stylesheet">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/main.min.css">
    </head>
    <body class="o-page o-page--center">
		
        <?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){
		
		$email = stripslashes($_REQUEST['email']); // removes backslashes
		$email = mysqli_real_escape_string($con,$email); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE email='$email' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['email'] = $email;
			header("Location: dashindex.php"); // Redirect user to index.php
            }else{
				echo "
				<div class='form container u-text-center'><h3 class='u-text-danger u-text-center'>Username/password is incorrect.</h3>
				</div>";
				}
    }else{}
	
		?>

        <div class="o-page__card o-page__card--horizontal">
            <div class="c-card c-login-horizontal">
                <div class="c-login__content-wrapper">
                    <header class="c-login__header">
                        <a class="c-login__icon c-login__icon--rounded c-login__icon--left" href="../../index.html">
                            <img src="img/logo-login.png" alt="Dashboard's Logo">
                        </a>

                        <h2 class="c-login__title">Sign In</h2>
                    </header>

                    <form class="c-login__content" action="" method="post" name="login">
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="input1">Email Address</label>
                            <input class="c-input" type="email" name="email" id="input1" placeholder="dummy@dashboard.com" required>
                        </div>

                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="input2">Password</label>
                            <input class="c-input" type="password" name="password" id="input2" placeholder="Numbers, Letters..." required>
                        </div>

                        <button class="c-btn c-btn--success c-btn--fullwidth" type="submit">Sign in</button>

                        <span class="c-divider u-mv-small"></span>

                        <a href="register.php" class="c-btn c-btn--secondary c-btn--fullwidth">Create Account</a>
                    </form>
                </div>

                <div class="c-login__content-image">
                    <img src="img/login2.jpg" alt="Welcome to WECLUB">

                    <h3>Welcome back</h3>
                    <p class="u-text-large">An interface designed for WE Club members to stay up to date with all the awesome events and news.</p>
                </div>
            </div>
        </div>

        <script src="js/main.min.js"></script>
    </body>
</html>
