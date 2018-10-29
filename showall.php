<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/design.css">

</head>
<body class="t">

<h1>Students</h1>
<a href="addstudents.php"><button class="btn btn-primary">Add User</button></a>
<hr>

<h1>STUDENTS BIO</h1>
<table>
    <tr>
        <th>Names</th>
        <th>Age</th>
        <th>DateofBirth</th>
        <th>AdmissionNumber</th>
        <th>Gender</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

    <?php

    $connected = mysqli_connect("localhost", "root", "", "pham");
    $fetch = mysqli_query($connected,"SELECT * FROM `student login`");
    while ($row = mysqli_fetch_assoc($fetch))
    {
        extract($row);
        echo"
<tr>
<td>$Names</td>
<td>$Age</td>
<td>$DateofBirth</td>
<td>$AdmissionNumber</td>
<td>$Gender</td>   
 <td><a href='update.php?x=$id'><button class='btn btn-success'>Update</button></a></td>
 <td><a href='delete.php?x=$id'><button class='btn btn-danger'>Delete</button></a></td>
   
</tr>
        ";
    }
    ?>
</table>

<h1>STUDENTS EXAM LIST</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>DateofBirth</th>
        <th>Gender</th>
        <th>AdmissionNumber</th>
        <th>Class</th>
        <th>ClassPosition</th>
        <th>OverallPosition</th>
        <th>Grade</th>
        <th>Remarks</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

    <?php

    $connected = mysqli_connect("localhost", "root", "", "pham");
    $fetch = mysqli_query($connected,"SELECT * FROM `add students`");
    while ($row = mysqli_fetch_assoc($fetch))
    {
        extract($row);
        echo"
<tr>
        <td>$Name</td>
        <td>$Age</td>
        <td>$DateofBirth</td>
        <td>$Gender</td>
        <td>$AdmissionNumber</td>
        <td>$Class</td>
        <td>$ClassPosition</td>
        <td>$OverallPosition</td>
        <td>$Grade</td>
        <td>$Remarks</td>   
 <td><a href='update.php?x=$id'><button class='btn btn-success'>Update</button></a></td>
 <td><a href='delete.php?x=$id'><button class='btn btn-danger'>Delete</button></a></td>
   
</tr>
        ";
    }
    ?>
</table>

</body>
</html>