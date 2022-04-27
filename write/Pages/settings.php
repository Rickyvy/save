<?php
session_start();
if ($_SESSION['user'] == "") {
    header("location:writeL.php");
    exit();
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Styles/settings.css">
        <link rel="stylesheet" href="../Styles/dark.css">
        <title>| Write_ | Settings</title>
    </head>

    <body>
        <div class="h1_title-settings">
            <h1>Settings</h1>
        </div>
        <div class="options">
            <a href="theme.php">
                <div class="theme">
                    <p class="p-theme">Theme</p>
                    <div class="arrow">></div>
                </div>
            </a>
            <a href="changeEmail.php">
                <div class="change-email">
                    <p class="p-changeemail">Change Email</p>
                    <div class="arrow">></div>
                </div>
            </a>
            <a href="changePass.php">
                <div class="change-pass">
                    <p class="p-changepass">Change Password</p>
                    <div class="arrow">></div>
                </div>
            </a>
            <a href="../php/logout.php">
                <div class="logout">
                    <p class="p-logout">Logout</p>
                    <div class="arrow"><img src="../img/logout.png" alt="" class="logout-img"></div>
                </div>
            </a>
        </div>
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