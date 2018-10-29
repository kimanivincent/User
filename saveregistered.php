<?php
/**
 * Created by PhpStorm.
 * User: vince
 * Date: 10/23/2018
 * Time: 9:11 PM
 */


if (isset($_GET['btnsave']))
{
    $connected = mysqli_connect("localhost","root","","pham");
        if (!$connected)
        {
            echo "failed to save to db";
        }
        else
        {
            $name = $_GET['name'];
            $email = $_GET['email'];
            $phone = $_GET['phone'];
            $date = $_GET['birth'];
            $username = $_GET['user'];
            $password = $_GET['word'];
            $gender = $_GET['gender'];
            $insert = "INSERT INTO `six`(`id`, `Name`, `Email`, `Phone Number`, `Date Of Birth`, `Username`, `Password`, `Gender`) 
  VALUES (null,'$name','$email','$phone','$date','$username','$password','$gender')";
            $query = mysqli_query($connected,$insert);
            if ($query)
            {
                echo "Saved Successfully";
                header("location:login.php");
            }
            else
            {
                echo "failed to save";
            }
        }
}

?>