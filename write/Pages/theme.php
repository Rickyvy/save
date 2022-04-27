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
        <link rel="stylesheet" href="../Styles/theme.css">
        <title>| Write_ | Theme</title>
    </head>

    <body>
        <div class="h1_title">
            <h1>Theme</h1>
        </div>
        <div class="options">
                <div class="theme">
                    <p class="p-theme">Dark</p>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="change-email">
                    <p class="p-changeemail">Bright</p>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
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