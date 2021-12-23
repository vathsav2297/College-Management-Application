<?php 
session_start(); 
include "../config.php";

    if (isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Subject'])
     && isset($_POST['Comment'])) {

        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $subject = $_POST['Subject'];
        $comment = $_POST['Comment'];

            $sql = "INSERT INTO feedback (name, email, subject, comment) 
            VALUES('$name', '$email', '$subject', '$comment')";

            $result = mysqli_query($conn, $sql);

            header("Location: ../Home/homepage.php#contact");
    }else{
        header("Location: index.php");
        exit();
    }

?>