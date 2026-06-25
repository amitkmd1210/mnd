<?php
include('config.php');

session_start();

if(!isset($_SESSION['user_id'])) {
    header('Location: index.php');
}

$error = '';
$success = '';

?>
<?php
include('header.php');
include('navbar.php');
?>


<?php
include('footer.php');
?>