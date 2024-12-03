<?php
require_once "angle_calculator.php";
require_once "logger.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hours = (int)$_POST['hours'];
    $minutes = (int)$_POST['minutes'];

    $result = getResultFromFile($hours, $minutes);
    
    if ($result === null) {
        $result = calculateClockAngle($hours, $minutes);
        logClockAngleResult($result, $hours, $minutes);
    }
}
require_once "sait.php";
?>