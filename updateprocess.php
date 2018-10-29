<?php
/**
 * Created by PhpStorm.
 * User: vince
 * Date: 10/23/2018
 * Time: 10:51 AM
 */

$connected = mysqli_connect("localhost","root","","pham");
if (isset($_POST['id'])){
    extract($_POST);
    mysqli_query($connected,"UPDATE student login SET Name='$name',Age='$age',Date='$date',Admission='$admission',
  Username='$username',Gender='$gender' WHERE id= $id");
    header("location:showstall.php");
}

?>