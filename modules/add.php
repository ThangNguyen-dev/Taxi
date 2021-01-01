<?php

function insertDistance(int $min, int $max, PDO $conn)
{
    $insert = $conn->prepare('INSERT INTO `distance`( `Min`, `Max`) VALUES (:Min,:Max)');
    $insert->execute(['Min' => $min, 'Max' => $max]);
    header("Location: distance.php");
}
function insertWeight(int $weight, PDO $conn)
{
    $insert = $conn->prepare('INSERT INTO `weight`( `weight`) VALUES( :weight)');
    $insert->execute(['weight' => $weight]);
    header("Location: weight.php");
}
function insertCost(int $idWeight, int $idDistance, PDO $conn, $fee)
{
    //
    $insert = $conn->prepare('INSERT INTO `cost`(`id_distance`, `id_weight`, `fee`) VALUES (:idDistance,:idWeight,:fee)');
    $insert->execute(['id_distance' => $idDistance, 'id_weight' => $idWeight, 'fee' => $fee]);
    header("Location: weight.php");
} 
