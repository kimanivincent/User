<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/design.css">
</head>
<body class="t">
<h1>REGISTRATION</h1>
<hr>
<div class="d">
    <form class="d" action="studentprocess.php" method="get">
        <label for="">Names</label><br>
        <input required type="text" name="name" placeholder="Enter your names"><br>

        <label for="">Age</label><br>
        <input required type="number" name="age" placeholder="Input your age"><br>

        <label for="">Date of Birth</label><br>
        <input required type="date" name="date"><br>

        <label for="">Admission Number</label><br>
        <input required type="number" name="admission" placeholder="Enter your Admission Number"><br>

        <label for="">Username</label><br>
        <input required type="text" name="username" placeholder="Enter Username"><br>

        <label for="">Password</label><br>
        <input required type="password" name="password" placeholder="Enter your password"><br>

        <label for="">Gender</label><br>
        <input required type="radio" name="gender" value="Male">Male
        <input required type="radio" name="gender" value="Female">Female <br>

        <input type="submit" name="btnsave" value="save">
        <input type="reset" name="Refresh" value="reset">
        <p>Do you have an account with us??  <a href="login.php"><button class="btn btn-danger">Login</button></a></p>

    </form>
</div>
</body>
</html>