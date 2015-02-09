<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
    <label>Rice</label><input type="text" name="rice">
    <label>Vegetable</label><input type="text" name="vegetable">
    <label>Fish</label><input type="text" name="fish">
    <label>Meat</label><input type="text" name="meat">
    <label>Vat</label><input type="text" name="vat">
    <button type="submit">Submit</button>
</form>
</body>
</html>

<?php

require 'billcalculation.php';
if (isset($_POST["rice"]) && isset($_POST["vegetable"]) &&isset($_POST["fish"]) && isset($_POST["meat"]) && isset($_POST["vat"]) &&isset($_POST["grossTotal"])
  && isset($_POST["payableAmount"]))
{

    $billcalculattion=new Billcalculation();
    $billcalculattion->rice=$_POST['rice'];
    $billcalculattion->vegetable=$_POST['vegetable'];
    $billcalculattion->fish=$_POST['fish'];
    $billcalculattion->meat=$_POST['meat'];
    $billcalculattion->vat=$_POST['vat'];
    $billcalculattion->grossTotal=$_POST['grossTotal'];
    $billcalculattion->payableAmount=$_POST['payableAmount'];


    echo "grossTotal:" .$billcalculattion->getGrossTotal() . "payableAmount:" .$billcalculattion ->getPayableAmount();

}

?>