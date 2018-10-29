<?php
/**
 * Created by PhpStorm.
 * User: vince
 * Date: 10/22/2018
 * Time: 10:52 AM
 */

$connected = mysqli_connect("localhost","root","","pham");

if (isset($_GET['x'])){
    $id = $_GET[ 'x' ];
    mysqli_query($connected,"delete from `student login` where id = $id");
    header("location:showall.php");
}

?>