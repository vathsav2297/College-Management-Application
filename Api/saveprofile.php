<?php
session_start();
include "../config.php";

if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['mavid'])&&isset($_POST['email']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mavid = $_POST['mavid'];
    $email = $_POST['email'];
    $id = $_SESSION['id'];

    $sql = "UPDATE `users` SET `firstname` = '$fname', 
    `lastname` = '$lname', `email` = '$email', 
    `mavid` = '$mavid' WHERE `users`.`id` = '$id';";

    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    header("Location: ../Home/manageprofiles.php");
    exit();
}
?>