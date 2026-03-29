 <?php

include '../db/dbconnect.php';


$email = htmlspecialchars($_POST['email']);
$fn = htmlspecialchars($_POST['firstname']);
$ln =htmlspecialchars( $_POST['lastname']);
$pass = htmlspecialchars($_POST['password']);
$cpass=htmlspecialchars( $_POST['cpassword']);


$sql = "INSERT INTO account VALUES (0, '$email','$fn','$ln','$pass')";

$con->query($sql);
