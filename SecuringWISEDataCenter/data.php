<?php
require_once('connection.php');

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve temperature data from the database
$sql = "SELECT datetime, value FROM temperaturesensor";
$result = $conn->query($sql);

// Store the temperature data in an array
$temperatureData = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $temperatureData[] = array(
            'datetime' => $row['datetime'],
            'value' => $row['value']
        );
    }
}

// Retrieve humidity data from the database
$sql = "SELECT datetime, value FROM humiditysensor";
$result = $conn->query($sql);

// Store the humidity data in an array
$humidityData = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $humidityData[] = array(
            'datetime' => $row['datetime'],
            'value' => $row['value']
        );
    }
}

// Retrieve gas data from the database
$sql = "SELECT datetime, value FROM gassensor";
$result = $conn->query($sql);

// Store the gas data in an array
$gasData = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $gasData[] = array(
            'datetime' => $row['datetime'],
            'value' => $row['value']
        );
    }
}

// Retrieve water leak data from the database
$sql = "SELECT datetime, value FROM waterleaksensor";
$result = $conn->query($sql);

// Store the water leak data in an array
$waterLeakData = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $waterLeakData[] = array(
            'datetime' => $row['datetime'],
            'value' => $row['value']
        );
    }
}

// Retrieve vibration data from the database
$sql = "SELECT datetime, value FROM vibrationsensor";
$result = $conn->query($sql);

// Store the vibration data in an array
$vibrationData = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $vibrationData[] = array(
            'datetime' => $row['datetime'],
            'value' => $row['value']
        );
    }
}

// Close the database connection
$conn->close();

// Return the temperature, humidity, gas, and water leak data as JSON
header('Content-Type: application/json');
echo json_encode(array(
    'temperatureData' => $temperatureData,
    'humidityData' => $humidityData,
    'gasData' => $gasData,
    'waterLeakData' => $waterLeakData,
    'vibrationData' => $vibrationData
));
?>
