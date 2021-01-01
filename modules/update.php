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
