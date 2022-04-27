<?php
session_start();
$db = "localhost";
$user = "root";
$password = "";
$name = "write";
$conn = mysqli_connect($db, $user, $password, $name);

if(isset($_POST['submit'])){
    if($_POST['pw'] == "" || $_POST['pw2'] == ""){
        header("Location:../Pages/changePass.php?error=empty");
        exit();
    } else {
        if($_POST['pw'] != $_POST['pw2']){
            header("Location:../Pages/changePass.php?error=passwordNotMatch");
            exit();
        } else {
            $sql = "UPDATE users SET pass='".$_POST['pw']."' WHERE email='".$_SESSION['user']."'";
            $result = mysqli_query($conn, $sql);
            header("Location:../Pages/settings.php");
            exit();
        }
    }
} else{
    header("location:javascript://location.go(-1)");
    exit();
}
?>