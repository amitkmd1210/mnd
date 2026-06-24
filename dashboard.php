<?php
session_start();

if(!isset($_SESSION['user_id'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container mt-5">

    <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>

    <p>Email: <?php echo $_SESSION['email']; ?></p>

    <a href="logout.php" class="btn btn-danger">Logout</a>

</div>

</body>
</html>