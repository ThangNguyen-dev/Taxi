<?php

/**
 * get Distance from database to show
 * @ $idDistance is interger
 * @ $conn is PDO object, database connection
 * @ return array weight from $idDistance
 */
function getDistance(int $idDistance, PDO $conn)
{
    if (isset($idDistance) && isset($conn)) {
        $distance = $conn->query('SELECT * FROM `distance` WHERE id_distance = ' . $idDistance);
        return $distance = $distance->fetch(PDO::FETCH_ASSOC);
    }
};

/**
 * get weight from database to show
 * @ $idWeight is interger
 * @ $conn is PDO object, database connection
 * @ return array weight from $idWeight
 */
function getWeight(int $idWeight, PDO $conn)
{
    if (isset($idWeight) && isset($conn)) {
        $weights = $conn->query('SELECT * FROM `weight` WHERE id_weight = ' . $idWeight);
        return $weights = $weights->fetch(PDO::FETCH_ASSOC);
    }
};
