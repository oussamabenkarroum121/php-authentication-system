
<?php
$error_email = "";
$success_message = "";

if (isset($_POST["Submit"])) {
    $email = trim($_POST["email"]);

    if (empty($email)) {
        $error_email = "Please Enter Your Email!";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_email = "Please Enter a Valid Email Address!";
    }
    else {
        $success_message = "Your request has been received. Password recovery is not configured yet.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
<link rel="stylesheet" href="Auth.css">
</head>
<body class="forgot-page">
    <form action="" method="POST" class="forgot-form">
      <img src="assets/Valorant-Emblem-768x432.png" alt="Valorant Logo">
        <h1>Forgot Password?</h1>
        <p>Don't worry! It happens. Enter your email address to recover your account.</p>
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
        <span class="error"><?php echo $error_email; ?></span>
        <?php if (!empty($success_message)) { ?>
            <div class="success-message"><?php echo htmlspecialchars($success_message); ?></div>
        <?php } ?>
        <button type="submit" name="Submit">Reset Password</button>
        <h6>Remember your password? <a href="SignIN.php">Back to Login</a></h6>
    </form>
</body>
</html>
