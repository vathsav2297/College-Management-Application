<?php
session_start();
include "../config.php";

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $type = $_GET['type'];
    $usertype = $_SESSION['usertype'];

    if($type=="d")
    {
        $sql = "DELETE FROM `department` WHERE `id` = $id;";
    }
    if($type=="p")
    {
        $sql = "DELETE FROM `programs` WHERE `id` = $id;";
    }
    if($type=="c")
    {
        $sql = "DELETE FROM `course` WHERE `id` = $id;";
    }

    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    exit();
}
?>