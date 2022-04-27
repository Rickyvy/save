<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/writeF.css">
    <link rel="stylesheet" href="../Styles/dark.css">
    <title>Document</title>
</head>

<body>
<a class="arrow-a" href="writeL.php">
    <div class="arrow"><</div>
    </a>
    <div class="title-writeF">
        <h1>Password Recovery</h1>
    </div>
    <div class="auth">
        <form action="../php/writeF.php" method="post" class="forgot-form">
            <input class="email-input" type="text" name="email" placeholder="Email">
            <input class="forgot-input" type="submit" name="submit" value="Send">
        </form>
    </div>
    <a href="writeL.php">
    <div class="cancel">Cancel</div>
    </a>
    <div class="title-writeF">
        <h2 class="h2-writeF">Write_</h2>
    </div>
</body>

</html>