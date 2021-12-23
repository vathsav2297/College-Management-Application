<?php 
session_start(); 
include "../config.php";

    if (isset($_POST['uname']) && isset($_POST['password'])) {

        function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

        $uname = validate($_POST['uname']);
        $pass = validate($_POST['password']);

            $sql = "SELECT * FROM users WHERE email='$uname'";

            $result = mysqli_query($conn, $sql);


            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['email'] === $uname && $row['password'] === $pass) {
                     $_SESSION['email'] = $row['email'];
                     $_SESSION['name'] = $row['name'];
                     $_SESSION['id'] = $row['id'];
                     $_SESSION['usertype'] = $row['user_type'];
                    if($row['user_type']== 'student')
                    {
                        header("Location: ../Student/studentclasses.php");
                        //echo $row['email'];
                    }
                    if($row['user_type']== 'advisor')
                    {
                        header("Location: ../Advisor/dashboard.php"); 
                    }
                    if($row['user_type']== 'professor')
                    {
                        header("Location: ../Professor/professorclasses.php");
                    }
                    if($row['user_type']== 'admin')
                    {
                        header("Location: ../Admin/admin.php");
                    }
                    //header("Location: homepage.php");
                    exit();
                }else{
                    header("Location: ../Home/signin.php?successmsg=Incorrect User name or password");
                    exit();
                }
            }else{

                header("Location: ../Home/signin.php?successmsg=Incorrect User name or password");
                exit();
            }
        
    }else{
        header("Location: index.php");
        exit();
    }

?>