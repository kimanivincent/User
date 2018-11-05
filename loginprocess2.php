<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/24/2018
 * Time: 7:38 PM
 */

if (isset($_GET['btnsave'])) {
    $connect = mysqli_connect("localhost", "root", "", "pham");
    if (!$connect) {
        echo "DB CONN Failed";
    } else {
        $username = $_GET[ 'username' ];

        $password = $_GET[ 'password' ];
        $select = "SELECT username FROM `six` WHERE username='$username' AND password='$password' ";
// $select2 = "SELECT password FROM `students reg` WHERE (password='$password')";
        $query = mysqli_query($connect, $select);
// $query2 = mysqli_query($connect,$select2);
        $count = mysqli_num_rows($query);
// $count2 = mysqli_num_rows($query2);

        if ($count == 1) {
            header("location:Home Page.php");
        } else {
            echo "Invalid Email";
        }
    }
}