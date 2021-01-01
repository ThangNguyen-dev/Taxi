<?php

function insertDistance($min, $max, $conn)
{
    $conn->query('INSERT INTO `distance`( `Min`, `Max`) VALUES (' . $min . ', ' . $max . ')');
}
function insertWeight($weight, $conn)
{
    $conn->query('INSERT INTO `weight`( `weight`) VALUES (' . $weight . ')');
}
