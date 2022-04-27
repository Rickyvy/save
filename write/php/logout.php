<?php       
    session_start();
    
    $_SESSION['user']="";
    header("location:../Pages/writeL.php");
    exit();
?>