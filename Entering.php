<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student-Log In</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/design.css">
</head>
<body>
<div id="r">
    <h1 class="w">STUDENT'S PORTAL <br> WELCOME! PLEASE LOG IN TO CONTINUE</h1>
    <hr>
    <form action="Entering.php" method="get" class="st">
        <input type="text" name="username" placeholder="Enter Username" required class="mt"><br>
        <input type="password" name="password" placeholder="Enter Password" required class="mt"><br>
        <input type="submit" name="btn_save" value="Log In">
    </form>

    <?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 10/24/2018
     * Time: 7:38 PM
     */

    if (isset($_GET['btn_save'])){
        $connect = mysqli_connect("localhost", "root", "","pham");
        if (!$connect){
            echo "DB CONN Failed";
        }else {
            $username = $_GET['username'];
            $password = $_GET['password'];
            $select = "SELECT email FROM `students login` WHERE username='$username' AND password='$password' ";
// $select2 = "SELECT password FROM `students reg` WHERE (password='$password')";
            $query = mysqli_query($connect,$select);
// $query2 = mysqli_query($connect,$select2);
            $count = mysqli_num_rows($query);
// $count2 = mysqli_num_rows($query2);

            if ($count==1){
                header("location:showall.php");
            }else{
                echo "Invalid Username or Password";
            }

        }
    }

    ?>
</div>
</body>
</html>
