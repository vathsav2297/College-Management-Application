<?php
session_start();
include "../config.php";

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $usertype = $_SESSION['usertype'];

    $sql = "DELETE FROM `users` WHERE `users`.`id` = ".$id.";";

    $result = mysqli_query($conn, $sql);
    exit();
}
?>