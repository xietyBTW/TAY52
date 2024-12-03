<?php
function getResultFromFile($hours, $minutes) {
    $logFile = 'result.json';
    
    if (!file_exists($logFile)) {
        return null;
    }

    $existingData = json_decode(file_get_contents($logFile), true);
    
    foreach ($existingData as $entry) {
        if ($entry['hours'] == $hours && $entry['minutes'] == $minutes) {
            return $entry['result'];
        }
    }
    return null;
}
?>