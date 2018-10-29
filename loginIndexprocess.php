<?php

if (isset($_GET['btnsave'])) {
    $connected = mysqli_connect("localhost", "root", "", "pham");

    if (!$connected)
    {
        echo "failed to connect to database";
    }
    else {
        $username = $_GET[ 'username' ];
        $password = $_GET[ 'password' ];
        $insert = "INSERT INTO `student login`(`Username`, `Password`) 
      VALUES ('$username','$password')";
        $query = mysqli_query($connected, $insert);

        if ($query)
        {
            echo "Logged in successfully";
            header("location:showstudents.php");
        }
        else
        {
            echo "Wrong username or password";
        }
    }
}




?>