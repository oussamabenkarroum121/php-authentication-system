
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
    <title>My Profile</title>
    <link rel="stylesheet" href="StyleProfile.css">
</head>
<body>
    <header>
        <h2>My Account</h2>
        <nav>
            <a href="home.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <div class="profile-card">
            <div class="profile-image">
                <span><?php echo strtoupper(substr($email, 0, 1)); ?></span>
            </div>
            <h1>My Profile</h1>
            <p class="subtitle">Manage your account information</p>
            <div class="profile-info">
                <label>Email Address</label>
                <p><?php echo htmlspecialchars($email); ?></p>
                <label>Account Status</label>
                <p class="active">Active</p>
                <label>Account Type</label>
                <p>Standard User</p>
            </div>
            <a href="home.php" class="back-button">Back to Dashboard</a>
            <a href="logout.php" class="logout-button">Logout</a>
        </div>
    </main>
</body>
</html>
