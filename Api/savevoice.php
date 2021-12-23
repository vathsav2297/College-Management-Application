<?php
session_start();
include "../config.php";

    $audio = $_POST['audio'];
    $id = $_SESSION['id'];

    $sql = "UPDATE `users` SET `recording` = '$audio' WHERE `users`.`id` = '$id';";

    $result = mysqli_query($conn, $sql);

    header("Location: ../Student/studentclasses.php");
    exit();
?>