<?php
session_start();
include "../config.php";

if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['mavid'])&&isset($_POST['email']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mavid = (empty($_POST['mavid'])) ? "NULL" : $_POST['mavid'];  
    $email = $_POST['email'];
    $deptid = (empty($_POST['deptid'])) ? "NULL" : $_POST['deptid'];
    $usertype = $_SESSION['usertype'];
    $programid = (empty($_POST['programid'])) ? "NULL" : $_POST['programid'];
    $courseid = (empty($_POST['courseid'])) ? "NULL" : $_POST['courseid'];
    $id = $_POST['id'];


    $sql = "UPDATE `users` SET `firstname` = '$fname', 
    `lastname` = '$lname', `email` = '$email', 
    `dept_id` = $deptid, `program_id` = $programid, 
    `course_id` = $courseid, 
    `mavid` = $mavid WHERE `users`.`id` = '$id';";

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
}
?>