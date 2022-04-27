<?php 
    session_start();
    $db = "localhost";
    $user = "root";
    $password = "";
    $name = "write";
    $conn = mysqli_connect($db, $user, $password, $name);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    if(isset($_POST['submit'])){
        if($_POST['email'] == "" ||$_POST['pw'] == "" ||$_POST['pw2'] == ""){
            $_SESSION['error'] = "There cannot be empty fields";
            header("Location:../Pages/writeR.php?error=empty");
            exit();
        } else {
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $_SESSION['error'] = "Make sure you enter a valid email";
                header("Location:../Pages/writeR.php?error=Invalidemail");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE email='".$_POST['email']."'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0){
                    $_SESSION['error'] = "This email is already in use";
                    header("Location:../Pages/writeR.php?error=emailtaken");
                    exit();
                } else {
                    if($_POST['email'] == ""){
                        $_SESSION['error'] = "There cannot be empty fields";
                        header("Location:../Pages/writeR.php?error=empty");
                        exit();
                    } else {
                        if($_POST['pw'] != $_POST['pw2']){
                            $_SESSION['error'] = "Make sure you enter the same password";
                            header("Location:../Pages/writeR.php?error=passwordcheck");
                            exit();
                        } else {
                            $sql = "INSERT INTO users (email, pass) VALUES ('".$_POST['email']."', '".$_POST['pw']."')";
                            $result = mysqli_query($conn, $sql);
                            header("Location:../Pages/documents.php");
                            exit();
                        }
                    }
                }
            }
        }
    } else {
        header("Location:../Pages/writeR.php?error=error"); 
        exit();
    }
?>