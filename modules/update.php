<?php
function updateDistance(int $min, int $max, PDO $conn, int $idDistance)
{
    $insert = $conn->prepare('UPDATE `distance` SET `Min`=:Min,`Max`=:Max WHERE id_distance = :id_Distance');
    $insert->execute(['Min' => $min, 'Max' => $max, 'id_Distance' => $idDistance]);
    header("Location: distance.php");
}
function updateWeight(int $weight, PDO $conn, int $idWeight)
{
    $insert = $conn->prepare('UPDATE `weight` SET `weight`=:weight WHERE id_weight = :id_weight');
    $insert->execute(['weight' => $weight, 'id_weight' => $idWeight]);
    header("Location: weight.php");
}

function updateCost(int $idWeight, int $idDistance, PDO $conn, int $fee)
{
    $insert = $conn->prepare('UPDATE `cost` SET `fee`=' . $fee . ' WHERE id_weight = ' . $idWeight . ' AND id_distance = ' . $idDistance);
    $insert->execute();
    header("Location: cost.php");
}
