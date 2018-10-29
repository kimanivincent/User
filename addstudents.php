<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Students</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/design.css">
</head>
<body class="r">

<h1>Add students</h1>
<hr>

<form action="addstudentsprocess.php" method="get">
    <label for="">Name</label><br>
    <input type="text" name="name" placeholder="Enter Name"><br>

    <label for="">Age</label><br>
    <input type="number" name="age" placeholder="Enter Age"><br>

    <label for="">Date Of Birth</label><br>
    <input type="date" name="date"><br>

    <label for="">Gender</label><br>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female <br>

    <label for="">Admission Number</label><br>
    <input type="number" name="admission" placeholder="Enter Admission Number"><br>

    <label for="">Class</label><br>
    <input type="text" name="class" placeholder="Enter Class"><br>

    <label for="">Class Position</label><br>
    <input type="number" name="position" placeholder="Enter Class Position"><br>

    <label for="">Overall Position</label><br>
    <input type="number" name="overall" placeholder="Enter Overall Position"><br>

    <label for="">Grade</label><br>
    <input type="text" name="grade" placeholder="Enter Grade"><br>

    <label for="">Remarks</label><br>
    <input type="text" name="remarks" placeholder="Enter Remarks"><br>

    <input type="submit" name="btnsave" value="save"><br>

    <input type="reset" name="reset" value="reset">
</form>

</body>
</html>