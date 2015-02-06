<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="index.php" method="post">
    <br><label>firstName</label><input type="text" name="firstName">
    <label>lastName:</label><input type="text" name="lastName">
    <label>RegNo:</label><input type="text" name="regNo">
    <button type="submit">Submit</button>
</form>

</body>
</html>



<?php

require 'student.php';

if (isset($_POST["firstName"]) && isset($_POST["lastName"]) &&isset($_POST["regNo"]))
{
    $student=new Student();
    $student->firstName=$_POST['firstName'];
    $student->lastName=$_POST['lastName'];
    $student->regNo=$_POST['regNo'];



    echo "Full Name: ". $student->getFullName() ."regNo :" . $student->regNo;

}