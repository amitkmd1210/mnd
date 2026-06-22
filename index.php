<?php
require('config.php');

// $sql = "insert into items(name,price) values('Milk', '20')";

// $result = mysqli_query($conn, $sql);

// if(mysqli_affected_rows($conn) > 0) {
//     echo "Data inserted successfully";
// }
// else {
//     echo "Error".mysqli_error($conn);
// }

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo "Form submitted";
    echo "<pre>"; print_r($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIT-MANDI Portal</title>
</head>
<body>
  
<div>
<h3>User Login</h3>

<form method="POST">

<label>Username</label>
<input type="text" class="form-control" name="username" id="username" />

<label>Password</label>
<input type="password" class="form-control" name="password" id="password" />

<button type="submit" name="submit">Submit</button>
<button type="reset" name="reset">Reset</button>

<a href="registration.php">Don't have userid ! Please sign-up</a>

</form>

</div>

</body>
</html>