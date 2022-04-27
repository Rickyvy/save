<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/writeL.css">
    <link rel="stylesheet" href="../Styles/dark.css">
    <title>Document</title>
</head>

<body>
    <a class="arrow-a" href="../writeM.php">
    <div class="arrow"><</div>
    </a>
    <div class="title-writeL">
        <h1>Sign In</h1>
    </div>
    <div class="auth">
        <form action="../php/login.php" method="POST">
            <input class="email-input" type="text" name="email" placeholder="Email">
            <input class="pass-input" type="password" name="pw" placeholder="Password">
            <input class="signin-input" type="submit" name="submit" value="Sign In">
        </form>
    </div>
    <div class="forgot-pass">
        <a href="writeF.php" class="a-writeL">Forgot Password?</a>
    </div>

    <div class="signup">
        <p class="reg">Don't have an account? <a class="signup-a" href="writeR.php">Sign up now!</a></p>
    </div>

    <div class="title-writeL">
        <h2 class="h2-writeL">Write_</h2>
    </div>
</body>

</html>