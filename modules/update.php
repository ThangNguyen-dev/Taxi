<?php
function updateDistance($min, $max, $conn, $id)
{
    $conn->query('UPDATE `distance` SET `Min`=' . $min . ',`Max`=' . $max . ' WHERE id_distance = ' . $id);
}
function updateWeight($weight, $conn, $id)
{
    $conn->query('UPDATE `weight` SET `weight`=' . $weight . ' WHERE id_weight = ' . $id);
}
