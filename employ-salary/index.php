<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <label>Employe name</label><input type="text" name="employeName"><br>
    <label>Basic Amount</label><input type="text" name="basicAmount"><br>
    <label>House Rent</label><input type="text" name="houseRent"><br>
    <label>Medical</label><input type="text" name="medical"><br>
    <button type="submit">Submit</button>
</form>
</body>
</html>




<?php

require('employeesalary.php');
if (isset($_POST["employeName"]) && isset($_POST["basicAmount"]) && isset($_POST["houseRent"]) && isset($_POST["medical"])
) {

    $aEmployesalary = new Employeesalary();
    $aEmployesalary->setEmployeName($_POST['employeName']);
    $aEmployesalary->setBasicAmount($_POST['basicAmount']);
    $aEmployesalary->setHouseRent($_POST['houseRent']);
    $aEmployesalary->setMedical($_POST['medical']);

    echo "Total Salary:" . $aEmployesalary->getTotalSalary();


}
?>