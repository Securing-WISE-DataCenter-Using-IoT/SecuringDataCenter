<?php
require_once('connection.php');

$response = array();

// Retrieve the last temperature value from the database
$sql = "SELECT value, datetime FROM temperaturesensor ORDER BY datetime DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $response['lastTemperature'] = $row['value'];
    $response['temperatureDateTime'] = $row['datetime'];
} else {
    $response['lastTemperature'] = 'No temperature data available.';
    $response['temperatureDateTime'] = '';
}

// Retrieve the last gas ratio value from the database
$sql = "SELECT value, datetime FROM gassensor ORDER BY datetime DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $response['lastGasRatio'] = $row['value'];
    $response['gasRatioDateTime'] = $row['datetime'];
} else {
    $response['lastGasRatio'] = 'No gas ratio data available.';
    $response['gasRatioDateTime'] = '';
}

// Retrieve the last humidity value from the database
$sql = "SELECT value, datetime FROM humiditysensor ORDER BY datetime DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $response['lastHumidity'] = $row['value'];
    $response['humidityDateTime'] = $row['datetime'];
} else {
    $response['lastHumidity'] = 'No humidity data available.';
    $response['humidityDateTime'] = '';
}

// Retrieve the last rainwater value from the database
$sql = "SELECT value, datetime FROM waterleaksensor ORDER BY datetime DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $response['lastRainwater'] = $row['value'];
    $response['rainwaterDateTime'] = $row['datetime'];
} else {
    $response['lastRainwater'] = 'No rainwater data available.';
    $response['rainwaterDateTime'] = '';
}




// Retrieve the last vibration value from the database
$sql = "SELECT value, datetime FROM vibrationsensor ORDER BY datetime DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $response['lastVibration'] = $row['value'];
    $response['vibrationDateTime'] = $row['datetime'];
} else {
    $response['lastVibration'] = 'No vibration data available.';
    $response['vibrationDateTime'] = '';
}


// Convert the response array to JSON format
echo json_encode($response);

// Close the database connection
$conn->close();
?>
