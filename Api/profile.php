<?php
session_start();
include "../config.php";

if(isset($_SESSION['id']))
{
    $id = $_SESSION['id'];

    $sql = "SELECT * FROM users where id=".$id."";
    $result = mysqli_query($conn, $sql);

    $arr = array($row = mysqli_fetch_assoc($result));

    exit(json_encode($arr));
}
?>