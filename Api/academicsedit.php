<?php
session_start();
include "../config.php";

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $type = $_GET['type'];

    if($type=="d")
    {
        $sql = "SELECT * FROM department where id=$id";
    }
    if($type=="p")
    {
        $sql = "SELECT * FROM programs where id=$id";
    }
    if($type=="c")
    {
        $sql = "SELECT * FROM section where id=$id";
    }

    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    $arr = array($row = mysqli_fetch_assoc($result));

    exit(json_encode($arr));
}
?>