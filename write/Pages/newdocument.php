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
        <link rel="stylesheet" href="../Styles/newdocument.css">
        <link rel="stylesheet" href="../Styles/dark.css">
        <title>| Write_ | New Document</title>
    </head>

    <body>
        <div class="div_arrowback">
            <button class="arrow_back"><a href="documents.php"><</a></button>
        </div>
        <div class="h1_title-newdocument">
            <h1>Write_</h1>
        </div>
        <div class="nav">
            <div class="div_save">
                <button class="btn-save">Save</button>
            </div>
            <div class="div_share">
                <button class="btn-share">Share</button>
            </div>
        </div>
        <div class="title-note">
            <form action="" method="POST">
                <input type="text" name="submit" id="submit" class="input-newdocument" placeholder="Title">
            </form>
        </div>
        <div class="div_textarea">
            <textarea class="textarea" name="" id="" cols="30" rows="10" placeholder="Note"></textarea>
        </div>
    </body>

    </html>
<?php
}
?>