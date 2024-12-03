<?php

function calculateClockAngle($hours, $minutes) 
{
    $hours = $hours % 12;
    $minutes = $minutes % 60;

    $minuteAngle = $minutes * 6;
    $hourAngle = ($hours * 30) + ($minutes * 0.5);

    $angle = abs($hourAngle - $minuteAngle);

    return $angle > 180 ? 360 - $angle : $angle;
}

require "getResult.php";
?>
