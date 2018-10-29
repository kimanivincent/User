<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/design.css">
</head>
<body class="r">

<h1><b><i>WELCOME</i></b></h1>
<hr>

<form action="saveregistered.php" method="GET">
    <label for="">Names</label><br>
    <input required type="text" name="name" placeholder="Enter Name Here"><br>

    <label for="">E-mail</label><br>
    <input required type="email" name="email" placeholder="Enter Email Here"><br>


    <label for="">Phone Number</label><br>
    <input type="number" name="phone" placeholder="Enter Phone Number Here"><br>

    <label for="">Date of Birth</label><br>
    <input type="date" name="birth"><br>

    <label for="">Username</label><br>
    <input type="text" name="user" placeholder="Enter New Username"><br>

    <label for="">Password</label><br>
    <input type="password" name="word" value="" placeholder="Enter New Password"><br>

    <label for="">Gender</label><br>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female <br>

    <input type="submit" name="btnsave" value="save">
    <p>Do you have an account with us??  <a href="login.php"><button class="btn btn-danger">Login</button></a></p>
</form>

<a href="login.php"><button class="btn btn-secondary">Login</button></a>

</body>
</html>