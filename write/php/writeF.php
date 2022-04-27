<?php
$db = "localhost";
$user = "root";
$password = "";
$name = "write";
$conn = mysqli_connect($db, $user, $password, $name);
if (isset($_POST['submit'])) {
    if ($_POST['email'] == "") {
        header("Location:../Pages/writeF.php?error=empty");
        exit();
    } else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            header("Location:../Pages/writeF.php?error=Invalidemail");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE email='" . $_POST['email'] . "'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck <= 0) {
                header("Location:../Pages/writeF.php?error=emaildoesNotexist");
                exit();
            } else {

            }
        }
    }
}
