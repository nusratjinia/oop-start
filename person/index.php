<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <label>Firstname</label><input type="text" name="firstName">
    <label>Middlename</label><input type="text" name="middleName">
    <label>Lastname</label><input type="text" name="lastName">
    <button type="submit">Submit</button>
</form>
</body>
</html>




<?php

require ('person.php');
if (isset($_POST["firstName"]) && isset($_POST["middleName"]) && isset($_POST["lastName"])
   ) {

    $aPersonerson = new Person();
    $aPersonerson->setFirstName($_POST['firstName']);
    $aPersonerson->setMiddleName($_POST['middleName']);
    $aPersonerson->setLastName($_POST['lastName']);

    echo "Full Name:" . $aPersonerson->getFullName();
    echo "<br>";
    echo "Reverse FullName:" . $aPersonerson->getReverseFullName();

}
?>