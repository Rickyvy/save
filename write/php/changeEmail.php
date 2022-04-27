<?php
session_start();
$db = "localhost";
$user = "root";
$password = "";
$name = "write";
$conn = mysqli_connect($db, $user, $password, $name);

if(isset($_POST['submit'])){
    if($_POST['email'] == ""){
        header("Location:../Pages/changeEmail.php?error=empty");
        exit();
    } else {
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            header("Location:../Pages/changeEmail.php?error=Invalidemail");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE email='".$_POST['email']."'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                header("Location:../Pages/changeEmail.php?error=emailtaken");
                exit();
            } else {
                $sql = "UPDATE users SET email='".$_POST['email']."' WHERE email='".$_SESSION['user']."'";
                $result = mysqli_query($conn, $sql);
                header("Location:../Pages/settings.php");
                exit();
            }
        }
    } 
}
else{
        header("location:javascript://location.go(-1)");
        exit();
}
?>
