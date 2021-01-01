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

/**
 * get cost from database to show
 * @ $idWeight is interger
 * @ $idDistance is interger
 * @ $conn is PDO object, database connection
 * @ return array weight from $idWeight
 */
function getCost(int $idWeight, int $idDistance, PDO $conn)
{
    if (isset($idWeight) && isset($idDistance) && isset($conn)) {
        $insert = $conn->prepare('SELECT cost.fee, distance.id_distance, weight.id_weight, distance.Min, distance.Max, weight.weight 
                                    FROM cost, distance, weight 
                                    WHERE cost.id_weight =:id_weight
                                    AND cost.id_distance =:id_distance
                                    AND distance.id_distance =:id_distance
                                    AND weight.id_weight =:id_weight');
        $insert->execute([':id_weight' => $idWeight, ':id_distance' => $idDistance]);
        return $insert->fetch(PDO::FETCH_ASSOC);
    }
}

//get distance new not isset in cost table
function getEmptyIdWeight(PDO $conn)
{
    $result = $conn->query('SELECT weight, id_weight FROM weight
                            WHERE id_weight NOT IN (SELECT id_weight FROM cost)');
    return $result->fetchAll(PDO::FETCH_ASSOC);
}


//get weight new not isset in cost table
function getEmptyIdDistance(PDO $conn)
{
    $result = $conn->query('SELECT Max, Min, id_distance FROM distance
                            WHERE id_distance NOT IN (SELECT id_distance FROM cost)');
    return $result->fetchAll(PDO::FETCH_ASSOC);
}
