<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Talent Academy School</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/design.css">
</head>
<body class="b">
<h1>TALENT ACADEMY SCHOOL</h1>
<hr>
<div class="row">
    <div class="col-md-9">
        <img src="images/two.jpg" alt="" width="1030px" height="600px">
    </div>

    <div class="col-md-3">
        <h5>WELCOME TO TALENT ACADEMY.</h5>
        <p class="p"> Where we turn your children dreams into reality and help them
            achieve them. </p>


        <form action="loginIndexprocess.php" method="get">
            <label for="">Username</label><br>
            <input type="text" name="username" placeholder="Enter Username"><br>

            <label for="">Password</label><br>
            <input type="password" name="password" placeholder="Enter Password"><br>

            <input type="submit" name="btnsave" value="save"><br>
            <br>


        </form>
        <p class="p">Don't have an account? <br><br>  <a href="Students.php"> <button class="btn btn-success">Student</button></a>
            <a href="login.php"><button class="btn btn-secondary">Administrator</button></a></p>


<!--        --><?php
//            $x = a("Student");
//            $y = b("Teacher");
//
//            if($x = "Students")
//            {
//                echo "Login as a Student";
//                header("Location:login.php");
//            }
//            elseif($y = "Teacher")
//            {
//                echo "Login as a Teacher";
//                header("location:Students.php");
//            }
//            else
//            {
//              echo "Sorry could not find what you were looking for." ;
//            }
//        ?>


</div>


</body>
</html>