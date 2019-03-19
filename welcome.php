<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<header>
    <div class="container">
        <div class="row">
            <div class="user col-md-1"><?php echo htmlspecialchars($_SESSION["username"]); ?></div>
            <div class="col-md-8"></div>
            <div class="user col-md-2"><a href="reset-password.php" class="btn btn-warning">Reset Your Password</a></div>
            <div class="user col-md-1"><a href="logout.php" class="btn btn-danger">Sign Out</a></div>
        </div>
    </div>
</header>
<body>

</body>
</html>