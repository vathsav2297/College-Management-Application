<?php
session_start();
include "../config.php";

    $tp = $_SESSION['type'];
    $usertype = $_SESSION['usertype'];

    if($tp == "d")
    {
        $deptname = $_POST['Deptname'];
        $id = $_POST['id'];

        $sql = "UPDATE `department` SET `name` = '$deptname' WHERE `id` = '$id';";

    }
    if($tp == "c")
    {
        $id = $_POST['id'];
        $deptid = $_POST['deptid'];
        $pgmid = $_POST['pgmid'];
        $crscode = $_POST['crscode'];
        $crsname = $_POST['crsname'];

        $sql = "UPDATE `course` SET `coursename` = '$crsname', `coursecode` = '$crscode',
        `deptid` = $deptid, `programid` = $pgmid WHERE `id` = '$id';";
    }
    if($tp == "p")
    {
        $id = $_POST['id'];
        $deptid = $_POST['deptid'];
        $pgmn = $_POST['pgmn'];

        $sql = "UPDATE `programs` SET `name` = '$pgmn',
        `dept_id` = $deptid WHERE `id` = '$id';";
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