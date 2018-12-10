<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Register | WE Club</title>
        <meta name="description" content="Dashboard UI Kit">
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
			$msg=" ";
			require('db.php');
			// If form submitted, insert values into the database.
				
			if (isset($_REQUEST['username']) && isset($_REQUEST['password'])){
				$username = stripslashes($_REQUEST['username']); // removes backslashes
				$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
				$email = stripslashes($_REQUEST['email']);
				$email = mysqli_real_escape_string($con,$email);
				$password = stripslashes($_REQUEST['password']);
				$password = mysqli_real_escape_string($con,$password);
				$cnfpassword = stripslashes($_REQUEST['cnfpassword']);
				$cnfpassword = mysqli_real_escape_string($con,$cnfpassword);
				$phone = stripslashes($_REQUEST['phone']);
				$phone = mysqli_real_escape_string($con,$phone);
				$trn_date = date("Y-m-d H:i:s");
				
				if($password==$cnfpassword){
				
				
				$query = "INSERT into `users` (username, password, email, phone ,trn_date) VALUES ('$username', '".md5($password)."', '$email','$phone', '$trn_date')";
				$result=mysqli_query($con,$query);
				
				if($result){
				  echo "
				  
				  <div class='form  container u-p-medium'>
				  <h3 class='u-text-center col-12 u-h3'>You are registered successfully.</h3>
				  <h4 class='u-text-center col-12 u-h4'>Click here to 
				  <a href='login-2.php'>Login</a></h4>
				  </div>
				  
				  "; 
				}
				else{
					echo " 
				  <div class='form  container u-p-medium'>
				  <h3 class='u-text-center col-12 u-h3 u-text-danger'>'".mysqli_error($con)."'</h3>
				  </div>
					";
					}
				}
				else {
					$msg="Passwords do not match,please try again";
					}
				
			}
			
	echo"
		<div class='form  container u-p-medium'>
		<h3 class='u-text-center col-12 u-h3 u-text-danger'>$msg</h3>
		</div>
	
	"
?>

        <div class="o-page__card">
            <div class="c-card u-mb-xsmall">
                <header class="c-card__header u-pt-large">
                    <a class="c-card__icon" href="../../index.html">
                        <img src="img/logo-login.png" alt="WE Club Register">
                    </a>
                    <h1 class="u-h3 u-text-center u-mb-zero">Sign up to Get Started</h1>
                </header>

                <form class="c-card__body" name="registration" action="" method="post">

                  <div class="c-field u-mb-small">
                      <label class="c-field__label" for="input1">First Name</label>
                      <input class="c-input" type="NAME" name="username" id="input4" placeholder="username" required>
                  </div>

                    <div class="c-field u-mb-small">
                        <label class="c-field__label" for="input1">Mobile Number</label>
                        <input class="c-input" type="Numbers" name="phone" id="input1" placeholder="+91 55522xxx" required>
                    </div>

                    <div class="c-field u-mb-small">
                        <label class="c-field__label" for="input1">Email address</label>
                        <input class="c-input" type="email" name="email" id="input5" placeholder="dummy@example.com" required>
                    </div>

                    <div class="c-field u-mb-small">
                        <label class="c-field__label" for="input2">Password</label>
                        <input class="c-input" type="password" name="password" id="input2" placeholder="Password" required>
                    </div>

                    <div class="c-field u-mb-small">
                        <label class="c-field__label" for="input3">Confirm Password</label>
                        <input class="c-input" type="password"  name="cnfpassword" id="input3" placeholder="Confirm Password" \>
                    </div>

                    <button class="c-btn c-btn--info c-btn--fullwidth" type="submit">Sign Up</button>

                    <span class="c-divider has-text c-divider--small u-mv-medium">Signup via social networks</span>

                    <div class="o-line">
                        <a class="c-icon u-bg-twitter" href="#!">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a class="c-icon u-bg-facebook" href="#!">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a class="c-icon u-bg-pinterest" href="#!">
                            <i class="fa fa-pinterest"></i>
                        </a>

                        <a class="c-icon u-bg-dribbble" href="#!">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </div>
                </form>
            </div>

            <div class="o-line">
                <a class="u-text-mute u-text-small" href="login-2.html" title="Login">
                    <i class="fa fa-long-arrow-left u-mr-xsmall"></i> Already have an account, login instead
                </a>
            </div>

        </div>

        <script src="js/main.min.js"></script>
    </body>
</html>
