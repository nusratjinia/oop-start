<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
    <label>Principal Amount</label><input type="text" name="principalAmount">
    <label>Annual Interest Rate</label><input type="text" name="annualInterestRate">
    <label>Time Period</label><input type="text" name="timePeriod">
    <button type="submit">Submit</button>
</form>
</body>
</html>



<?php
require 'interestcalculator.php';


if (isset($_POST["principalAmount"]) && isset($_POST["annualInterestRate"]) &&isset($_POST["timePeriod"])){


    $acalculator=new InterestCalculator();
    $acalculator->annualInterestRate=$_POST['annualInterestRate'];
    $acalculator->principalAmount=$_POST['principalAmount'];
    $acalculator->timePeriod=$_POST['timePeriod'];

    echo "totalAmount:" .$acalculator->getTotalAmount();


}
