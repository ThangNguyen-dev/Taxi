<?php
require_once 'db.php';
require_once 'CostTaxi.class.php';
require_once 'template/header.php';
echo phpinfo();

$error = null;
$distance = null;
$weight = null;
$fee = null;

if (isset($_POST['submit'])) {
    $weight = $_POST['weight'];
    $distance = $_POST['distance'];
    $unit = $_POST['unit'];
}

//convert unit for weight kg to ton
if (isset($unit) && $unit == 'ton') {
    $weight = $weight;
}elseif (isset($unit) && $unit == 'kg')
{
    $weight = $weight/1000;
}else {
    $error = 'Du lieu vua nhap khong hop le!';
}
if ($weight <= 0 || $distance <=0) {
    include 'modules/error.php';
}

if (isset($_POST['submit']) && empty($error)) {
    $taxi_fee = new CostTaxi($conn, $weight, $distance);
    $fee = $taxi_fee->getCost();
    include 'modules/sucess.php'
;}

require_once 'template/footer.php'
?>
