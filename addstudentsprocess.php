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
        $gender = $_GET['gender'];
        $admission = $_GET['admission'];
        $class = $_GET['class'];
        $position = $_GET['position'];
        $overall = $_GET['overall'];
        $grade = $_GET['grade'];
        $remarks = $_GET['remarks'];
        $insert = "INSERT INTO `add students`(`id`, `Name`, `Age`, `DateOfBirth`, `Gender`, `AdmissionNumber`, `Class`, `ClassPosition`, `OverallPosition`, `Grade`, `Remarks`)
        VALUES (null,'$name','$age','$date','$gender','$admission','$class','$position','$overall','$grade','$remarks')";
        $query = mysqli_query($connected,$insert);

        if ($query)
        {
            echo "saved successfully";
            header("location:showall.php");
        }
        else
        {
            echo "failed to save to db";
        }
    }
}



?>