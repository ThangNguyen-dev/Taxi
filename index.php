<?php
require_once 'db.php';
require_once 'includes/CostTaxi.class.php';
require_once 'template/header.php';

$error = null;
$distance = null;
$weight = null;
$fee = null;

if (isset($_POST['submit'])) {
    $weight = floatval($_POST['weight']);
    $distance = floatval($_POST['distance']);
    $unit = $_POST['unit'];
}

//convert unit for weight kg to ton
if (isset($unit) && $unit == 'ton') {
    $weight = $weight;
} elseif (isset($unit) && $unit == 'kg') {
    $weight = $weight / 1000;
}

//check submit button and not error 
if (isset($_POST['submit']) && empty($error)) {
    $taxi_fee = new CostTaxi($conn, $weight, $distance);
    $fee = $taxi_fee->getCost();;
}

require_once 'modules/main.php';
require_once 'template/footer.php';
