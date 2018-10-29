<?php
/**
 * Created by PhpStorm.
 * User: vince
 * Date: 10/25/2018
 * Time: 7:01 PM
 */
if (isset($_GET['btnsave']))
{
   $connected = mysqli_connect("localhost","root","","pham");
   if (!$connected)
   {
       echo "Failed to connect to the database";
   }
   else
   {
       $name = $_GET['name'];
       $age = $_GET['age'];
       $date = $_GET['date'];
       $admission = $_GET['admission'];
       $username = $_GET['username'];
       $password = $_GET['password'];
       $gender = $_GET['gender'];
       $insert = "INSERT INTO `student login`(`id`, `Names`, `Age`, `Date of Birth`, `Admission Number`, `Username`, `Password`, `Gender`) 
VALUES (null,'$name','$age','$date','$admission','$username','$password','$gender')";
       $query = mysqli_query($connected,$insert);

       if ($query)
       {
           echo "saved successfully";
           header("location:login.php");
       }
       else
       {
           echo "failed to save to db";
       }
   }
}



?>