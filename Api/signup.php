<?php 
use PHPMailer\PHPMailer\PHPMailer;
session_start(); 
include "../config.php";

require_once "../PHPMailer/PHPMailer.php";
require_once "../PHPMailer/SMTP.php";
require_once "../PHPMailer/Exception.php";

    if (isset($_POST['uname']) && isset($_POST['lname']) && isset($_POST['email'])
     && isset($_POST['password']) && isset($_POST['usertype'])) {

        function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

        $firstname = validate($_POST['uname']);
        $lastname = validate($_POST['lname']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        $usertype = validate($_POST['usertype']);
        
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) != 0) {
            header("Location: signin.php?successmsg=Email already exists");
        }
        else{
            $sql = "INSERT INTO users (firstname, lastname, email, password, user_type) 
            VALUES('$firstname', '$lastname', '$email', '$password','$usertype')";

            $result = mysqli_query($conn, $sql);

    
            $mail = new PHPMailer();
    
            //SMTP Settings
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "srivathsavabwg3@gmail.com";
            $mail->Password = 'ComitaS@1';
            $mail->Port = 465; 
            $mail->SMTPSecure = "ssl"; 
    
            //Email Settings
            $mail->isHTML(true);
            $mail->setFrom($email, "SAYITRIGHT");
            $mail->addAddress($email);
            $mail->Subject = "Registration Successful";
            $mail->Body = "<body>
            <p>Hello, <br/><br/>
            You have successfully registered with SayitRight.
            Please login by clicking the link below</p>
            <a href='http://localhost/code%202/Home/signin.php' style='background-color: antiquewhite;
            color: black;
            border: 2px solid antiquewhite;
            padding: 4px 42px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;' >Login</a>
            </body>";
    
            if ($mail->send()) {
                header("Location: ../Home/signin.php?successmsg=Registered Successfully!!");
            } 
            else {
                // $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
                header("Location: ../Home/signin.php?successmsg=Registered Failed!!");
            }
            
            exit();
        }
    }
    else{
        header("Location: signin.php?successmsg=Registered Failed!!");
        exit();
    }

?>