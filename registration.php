<?php
$error = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password != $cpassword) {
        $error = "Password and Confirm Password should match!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <style>
 #reg_form {
        margin-left: 150px;
    margin-top: 20px;
}
</style>
<link href="assets/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    
<div class="container">

<div class="row justify-content">
    <div class="col-md-12">

<h3 class="text-justify" id="reg_form" >Registration Form</h3>
<?php if($error): ?>
<div class="alert alert-danger">
    <?php echo $error; ?>
</div>
<?php endif; ?>

<form method="POST">

<div class="col-md-6">
<label>Email</label>
<input type="email" class="form-control" name="email" id="email" require />
</div>

<div class="col-md-6">
<label>Username</label>
<input type="text" class="form-control" name="username" id="username" require />
</div>

<div class="col-md-6">
<label>Password</label>
<input type="password" class="form-control" name="password" id="password" require />
</div>

<div class="col-md-6">
<label>Confirm Password</label>
<input type="password" class="form-control" name="cpassword" id="cpassword" require />
</div>

<div class="col-md-6">
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
<button type="reset" class="btn btn-danger" name="reset">Reset</button>
</div>

<a href="index.php">Already have userid ! Please sign-in</a>

</form>
</div>

</div>
</div>

</body>
<script src="assets/js/bootstrap.min.js" ></script>
<script src="assets/js/bootstrap.bundle.min.js" ></script>
</html>