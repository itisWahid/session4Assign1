<?php

function mutliplicationTable($num)
{
    echo "<td style='border:1px solid; padding:5px;background-color:#dddddf'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<h5>" . $i . " x " . $num . " = " . $i * $num . "</h5>";
    }
    echo "</td>";
}

function printStars($width, $height)
{
    for ($i = 1; $i <= $height; $i++) {
        for ($j = 1; $j <= $width; $j++) {
            echo "<span style='background-color:yellow'>*</span>";
        }
        echo "<br>";
    }
}