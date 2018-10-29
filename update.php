<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Update</title>
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="Bootstrap/css/design.css">
    </head>
    <body class="t">

    <h1>Update Users</h1>
    <a href="showall.php"><button>Cancel</button></a>
    <hr>

    <form action="updateprocess.php" method="post">
        <?php
        /**
         * Created by PhpStorm.
         * User: vince
         * Date: 10/23/2018
         * Time: 10:33 AM
         */

        $connected = mysqli_connect("localhost","root","","pham");
        $id = $_GET['x'];
        $fetch = mysqli_query($connected,"SELECT * FROM `student login` WHERE id=$id");
        $row = mysqli_fetch_assoc($fetch);
        extract($row);
        ?>


        <input class="k" required type="text" name="name" value="<?php echo $Name?>">
        <input class="k" required type="number" name="age" value="<?php echo $Age?>">
        <input class="k" required type="date" name="date" value="<?php echo $Date?>">
        <input class="k" required type="number" name="admission" value="<?php echo $Admission?>">
        <input class="k" required type="text" name="username" value="<?php $Username?>">
        <input class="k" type="number" name="id" value="<?php echo $Id?>" hidden>
        <input class="k" type="submit" name="btnsave" value="Update">


    </form>
    </body>
</html>