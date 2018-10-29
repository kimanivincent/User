<?php
/**
 * Created by PhpStorm.
 * User: vince
 * Date: 10/25/2018
 * Time: 4:30 PM
 */
if (isset($_GET['btnsave']))
{
    $connected = mysqli_connect("localhost","root","","pham");
    if (!$connected)
    {
        echo "failed to connect to database";

    }
    else
    {
        $username = $_GET['username'];
        $password = $_GET['password'];
        $insert = "INSERT INTO `six`( `Username`, `Password`) 
VALUES ('$username','$password')";
        $query = mysqli_query($connected,$insert);

        if ($query){
            echo "saved successfully";
            header ("location:Home Page.php");

        } else{
            echo "failed to save";
        }

    }
}

?>