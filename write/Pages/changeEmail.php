<?php
    session_start();
    if ($_SESSION['user']==""){
        header("location:writeL.php");
        exit();
    }else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/changeEmail.css">
    <link rel="stylesheet" href="../Styles/dark.css">
    <title>| Write_ | Change Email</title>
</head>

<body>
    <div class="h1_title-email">
        <h1>Change Email</h1>
    </div>
    <form action="../php/changeEmail.php" method="POST">
    <div class="change_div">
        <input type="text" name="email" class="input-email" placeholder="Change Email">
        <button type="submit" name="submit" class="changeEmail_btn">Change</button>
    </div>
    </form>

    <div class="logo">
        <h2>Write_</h2>
    </div>
    <div class="footer">
        <div class="menu">
            <a href="documents.php">
                <div class="documents">
                    <div class="folder-img"><img src="../img/folder.png"></div>
                    <button class="btn-doc">Documents</button>
                </div>
            </a>
            <a href="readerMode.php">
                <div class="readerMode">
                    <div class="book-img"><img src="../img/book.png"></div>
                    <button class="btn-reader">Reader Mode</button>
                </div>
            </a>
            <a href="settings.php">
                <div class="settings">
                    <div class="folder-img"><img src="../img/settings.png"></div>
                    <button class="btn-settings">Settings</button>
                </div>
            </a>
        </div>
    </div>
</body>

</html>
<?php
    }
?>