<?php
include "../config.php";

$sql = "SELECT * FROM programs";
$sql2 = "SELECT * FROM users where user_type='student'";
$sql3 = "SELECT * FROM users where user_type='professor'";
$sql4 = "SELECT * FROM users where user_type='advisor'";
$sql5 = "SELECT * FROM users where user_type='admin'";

$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);
$result5 = mysqli_query($conn, $sql5);


$arr = array('total' => mysqli_num_rows($result), 'stds' => mysqli_num_rows($result2), 'pfs' => mysqli_num_rows($result3)
    , 'advs' => mysqli_num_rows($result4), 'adms' => mysqli_num_rows($result5));

 exit(json_encode($arr));
?>
