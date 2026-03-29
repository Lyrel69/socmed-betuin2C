<?php 
session_start();
include '../db/dbconnect.php';

$post = htmlspecialchars($_POST['post-area']);
$aid = $_SESSION['aid'];

$sql = "INSERT INTO post (aid, post_text, post_date)
        VALUES ('$aid', '$post', NOW())";

if($con->query($sql) === TRUE) {
    header("location:../profile.php");
} else {
    echo "Error: " . $con->error;
}
?>