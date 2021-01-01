<?php

/**
 * delete Weight from idWeight
 * @ $idWeight is interger
 * @ $conn is PDO object, database connection
 * @ return array weight from $idWeight
 */
function deleteWeight(int $idWeight, PDO $conn)
{
    $resultCost = $conn->query("DELETE FROM `cost` WHERE id_weight = " . $idWeight);
    $resultWeight = $conn->query("DELETE FROM `weight` WHERE id_weight = " . $idWeight);
    if (isset($resultCost) && isset($resultWeight)) {
        header("Location: weight.php");
    } else {
        return 'That Bai';
    }
}

/**
 * get Distance from database to show
 * @ $idDistance is interger
 * @ $conn is PDO object, database connection
 * @ return array weight from $idDistance
 */
function deleteDistance(int $idDistance, PDO $conn)
{
    $resultCost = $conn->query("DELETE FROM `cost` WHERE id_distance = " . $idDistance);
    $resultDistance = $conn->query("DELETE FROM `distance` WHERE id_distance = " . $idDistance);
    if (isset($resultCost) && isset($resultDistance)) {
        header("Location: distance.php");
    } else {
        return 'That Bai';
    }
}
