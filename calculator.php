<?php


function sum($num1, $num2)
{
    return $num1 + $num2;
}
function div($num1, $num2)
{
    return $num2 > 0 ? $num1 + $num2 : "Invalid";
}
function sub($num1, $num2)
{
    return $num1 - $num2;
}
function mul($num1, $num2)
{
    return $num1 * $num2;
}

function power($num1, $num2)
{
    $result = 1;
    for ($i = 1; $i <= $num2; $i++) {
        $result = $result * $num1;
    }
    return $result;
}