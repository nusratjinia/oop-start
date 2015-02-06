<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="index1.php" method="post">
    <br><label>ID:</label><input type="text" name="id">
    <label>Name:</label><input type="text" name="name">
    <label>Salary:</label><input type="text" name="salary">
    <button type="submit">Submit</button>
</form>

</body>
</html>



<?php

require 'employee.php';

            if (isset($_POST["id"]) && isset($_POST["name"]) &&isset($_POST["salary"]))
            {
                $anEmployee=new Employee ();
                $anEmployee->id=$_POST['id'];
                $anEmployee->name=$_POST['name'];
                $anEmployee->salary=$_POST['salary'];

                echo "Id: ", $anEmployee->id, ", Name: ",  $anEmployee->name, " , Salary: ", $anEmployee->salary;

            }

//            {
//                $id = $_POST["id"];
//                $name = $_POST["name"];
//                $salary = $_POST["salary"];
//                echo "Id: ", $id, ", Name: ", $name, " , Salary: ", $salary;
//            }
?>