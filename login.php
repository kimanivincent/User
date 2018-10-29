<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/design.css">
</head>
<body class="t">
<h1>Login Page</h1>
<hr>

<form class="d" action="loginprocess.php" method="get">
    <h2>Sign In</h2>
    <label for="">Username</label><br>
    <input required type="text" name="username" placeholder="Enter Username Here"><br>

    <br><label for="">Password</label><br>
    <input required type="password" name="password" value="" placeholder="Enter your password"><br>


    <input type="submit" name="btnsave" value="save">
    <input type="reset" name="RESET" value="reset">
    <p>Have you registered with us??  <a href="registration.php">Sign up</a></p>
</form>
</body>
</html>