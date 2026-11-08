
<?php
  $error_password = "" ; 
  $error_email  = "" ; 
    if(isset($_POST["Submit"])){ 
      $email = $_POST["email"] ; 
      $password = $_POST["password"] ; 
      if($email !== "Admin123@gmail.com"){
        $error_email = "Your Email is Incorrect Please Try With Valid One ! " ; 
      }
      if($password !== "Password@123" ){ 
      $error_password =  "Your Password is Wrong" ; 
      }
    if($email == "Admin123@gmail.com" && $password == "Password@123"){ 
    session_start() ; 
     session_regenerate_id(true);
    $_SESSION["email"] = $email ; 
    header("location: home.php") ; 
    exit();
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="StyleSignUp.css">
</head>
<body class="signup-page">
    <form action="" method="POST">
        <img src="Valorant-Emblem-768x432.png" alt="Valorant Logo">
        <h1>Login To Your Account</h1>
        <p>Enter Your Details to access your account</p>
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required>
        <span><?php echo $error_email; ?></span>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <span><?php echo $error_password; ?></span>
        <div class="remember-forgot">
            <label class="remember">                
              <input type="checkbox" name="remember">                Remember Me            </label>
            <a href="forgot.php">Forgot Password?</a>
     </div>
        <button type="submit" name="Submit">Login</button>
        <h6>Don't have an account?<a href="SignUp.php">Create One</a></h6>
    </form>
</body>
</html>
