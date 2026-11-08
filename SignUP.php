<?php
  $error_confirm_password   = "" ; 

  $error_name = "" ; 
  $error_number  = "" ; 
  $error_password = "" ; 
  $error_email  = "" ; 
if(isset($_POST["Submit"])){
  $Full_name =  $_POST["Full_Name"] ;
  $numero =  $_POST["numero"] ;  
  $email =  $_POST["email"] ; 
  $password =  $_POST["password"] ; 
  $Confirm_Password =  $_POST["Confirmation_password"] ; 
  $valid = 1 ; 

  

if(empty($Full_name)){ 
  $error_name =  "Please Enter Your Full Name ! " ; 
  $valid = 0 ; 
}

if(!preg_match("/^(06|07)[0-9]{8}$/", $numero)){ 
  $error_number = "Number Isn't Valid Please Try Another Time !" ; 
  $valid = 0 ;
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  $error_email = "Email Isn't Valid Please Try Another One ! " ; 
  $valid = 0 ;
}
 if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[^a-zA-Z0-9]).{8,}$/", $password)) {
    $error_password = "Password is Weak Try With diffrent Characters ! " ; 
  $valid = 0 ;
}
if($password !== $Confirm_Password){ 
  $error_confirm_password = "Password Doesn't Match With it ConFirmation Try Again ! "  ; 
  $valid = 0 ;
}
if( $valid === 1 ){ 
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  header("location: SignIN.php") ; 
  exit() ; 
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up  Page </title>
<link rel="stylesheet" href="Auth.css">
</head>
<body class="signup-page">
     <form action="" method="POST" class="signup-form">
    <img src="Valorant-Emblem-768x432.png" >
    <h1>Create An Account</h1>
    <p>join us start managing your editorial account  </p>
    <label for="Full_Name">Full Name</label>
    <input type="text" name="Full_Name" id="Full_Name">
    <span style="color:red;"> <?php echo $error_name ?> </span>
    <label for="numero">Numero TelePhone</label>
    <input type="tel" name="numero" id="numero">
      <span style="color:red;"> <?php echo $error_number ?> </span>
    <label for="email">Email Adress</label>
    <input type="email" name="email" id="email">
    <span style="color:red;"> <?php echo $error_email ?> </span>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <span style="color:red;"> <?php echo $error_password ?> </span>
    <label for="Confirmation_password">Confirm Password</label>
    <input type="password" name="Confirmation_password" id="Confirmation_password">
    <span style="color:red;"> <?php echo $error_confirm_password ?> </span>
    <button name="Submit"  type="Submit">Get Started</button>
    <h6>Already  have an account ? <a href="SignIN.php">Log In</a></h6>
    </form>
</body>
</html>
