<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/writeR.css">
    <link rel="stylesheet" href="../Styles/dark.css">
    <title>Document</title>
</head>

<body>
<a class="arrow-a" href="../writeM.php">
    <div class="arrow"><</div>
    </a>
    <div class="title-writeR">
        <h1 class="h1-writeR">Sign Up</h1>
    </div>

    <div class="auth">
        <form action="../php/registration.php" method="POST">
            <input class="email-input" type="text" name="email" placeholder="Email">
            <input class="pass-input" type="password" name="pw" placeholder="Password">
            <input class="pass-input" type="password" name="pw2" placeholder="Confirm Password">
            <input class="signin-input" type="submit" name="submit" value="Sign Up">
        </form>
    </div>

    <div class="signup">
        <p class="reg">Already have an account? <a class="signup-a" href="writeL.php">Sign in now!</a></p>
    </div>

    <div class="title-writeR">
        <h2 class="h2_title-writeR">Write_</h2>
    </div>
</body>

</html>