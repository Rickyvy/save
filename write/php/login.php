<?php 
    session_start();
    $db = "localhost";
    $user = "root";
    $password = "";
    $name = "write";
    $conn = mysqli_connect($db, $user, $password, $name);


    if(isset($_POST['submit'])){
        if(empty($_POST['email']) || empty($_POST['pw'])){
            header("location:../Pages/writeL.php?error=empty");
            exit();

        } else {
            $checkUsername = "SELECT * FROM users WHERE email = '".$_POST['email']."' AND active = '0'";

            $resulCheckUsername = mysqli_query($conn,$checkUsername);

            if(mysqli_num_rows($resulCheckUsername) > 0){
                $checkPassword = "SELECT * FROM users WHERE email = '".$_POST['email']."' AND pass = '".$_POST['pw']."'";

                $resulCheckPassword = mysqli_query($conn,$checkPassword);
    
                if(mysqli_num_rows($resulCheckPassword) > 0){
                    $_SESSION['user']=$_POST['email'];
                    header("location:../Pages/documents.php");
                    exit();
    
                } else {
                    header("location:../Pages/writeL.php?error=passwordIncorrect");
                    exit();

                }

            } else {
                header("location:../Pages/writeL.php?error=InvalidEmail");
                exit(); 
            }
        } 

    }  else{
        header("location:javascript://location.go(-1)");
            exit();
    }
?>
