
<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: SignIN.php");
    exit();
}

$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Dashboard</title>
    <link rel="stylesheet" href="StyleHome.css">
</head>
<body>
    <header>
        <h2>My Dashboard</h2>
        <nav>
            <a href="home.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <section class="welcome">
            <h1>Welcome Back!</h1>
            <p>You have successfully logged into your account.</p>
        </section>
        <section class="account">
            <h2>Account Information</h2>
            <p>Email Address:</p>
            <strong><?php echo htmlspecialchars($email); ?></strong>
            <p class="status">Account Status: Logged In</p>
        </section>
        <section class="features">
            <h2>Quick Access</h2>
            <a href="profile.php">My Profile</a>
            <a href="forgot.php">Password Recovery</a>
            <a href="logout.php">Logout</a>
        </section>
    </main>
</body>
</html>
