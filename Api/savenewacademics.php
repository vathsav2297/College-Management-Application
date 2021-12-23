<?php
session_start();
include "../config.php";

    $tp = $_SESSION['type'];
    $usertype = $_SESSION['usertype'];

    if($tp == "d")
    {
        $deptname = $_POST['Deptname'];

        $sql = "INSERT INTO `department` (`name`) VALUES ('$deptname');";

    }
    if($tp == "c")
    {
        $deptid = $_POST['deptid'];
        $pgmid = $_POST['pgmid'];
        $crscode = $_POST['crscode'];
        $crsname = $_POST['crsname'];

        $sql = "INSERT INTO `course` ( `deptid`, `programid`, `coursecode`, 
        `coursename`) VALUES ( '$deptid', '$pgmid', '$crscode', '$crsname');";
    }
    if($tp == "p")
    {
        $deptid = $_POST['deptid'];
        $pgmn = $_POST['pgmn'];

        $sql = "INSERT INTO `programs` (`name`, `dept_id`) VALUES ('$pgmn', '$deptid');";
    }

    echo $sql;
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if($usertype=="student")
    {
        header("Location: ../Student/studentclasses.php");
    }
    if($usertype=="admin")
    {
        header("Location: ../Admin/admin.php");
    }
    if($usertype=="professor")
    {
        header("Location: ../Professor/professorclasses.php");
    }
    if($usertype=="advisor")
    {
        header("Location: ../Advisor/dashboard.php");
    }
    exit();
?>