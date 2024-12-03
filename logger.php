<?php
function logClockAngleResult($result, $hours, $minutes) {
    $logEntry = [
        'timestamp' => date('Y-m-d H:i:s'),
        'result' => $result,
        'hours' => $hours,
        'minutes' => $minutes,
        'user_info' => [
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown',
            'request_method' => $_SERVER['REQUEST_METHOD']
        ]
    ];

    $logFile = 'result.json';

    $existingData = [];
    if (file_exists($logFile)) {
        $existingData = json_decode(file_get_contents($logFile), true) ?: [];
    }

    $existingData[] = $logEntry;

    file_put_contents($logFile, json_encode($existingData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

function getLogEntries() {
    $logFile = 'result.json';
    
    if (!file_exists($logFile)) {
        return [];
    }

    return json_decode(file_get_contents($logFile), true);
}