<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wise_datacenter";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
    die("Error: " . mysqli_connect_error());
}

// Function to sanitize user input
function sanitizeInput($connect, $input)
{
    $input = trim($input);
    $input = mysqli_real_escape_string($connect, $input);
    return $input;
}

// Validate and sanitize user input
$humidity = sanitizeInput($connect, $_GET["humidity"]);
$temperature = sanitizeInput($connect, $_GET["temperature"]);
$mq2Value = sanitizeInput($connect, $_GET["mq2Value"]);
$rainWaterValue = sanitizeInput($connect, $_GET["rainWaterValue"]);
$sw420Value = sanitizeInput($connect, $_GET["sw420Value"]);

// Check humidity condition
if ($humidity > 60) {
    $query1 = "INSERT INTO humiditysensor (sensor, value, datetime) VALUES ('Humidity', '$humidity', NOW())";
    $result1 = mysqli_query($connect, $query1);

    if ($result1) {
        echo "Humidity data stored successfully!<br>";
    } else {
        echo "Error storing Humidity data: " . mysqli_error($connect) . "<br>";
    }
}

// Check temperature condition
if ($temperature > 30) {
    $query2 = "INSERT INTO temperaturesensor (sensor, value, datetime) VALUES ('Temperature', '$temperature', NOW())";
    $result2 = mysqli_query($connect, $query2);

    if ($result2) {
        echo "Temperature data stored successfully!<br>";
    } else {
        echo "Error storing Temperature data: " . mysqli_error($connect) . "<br>";
    }
}

// Check MQ2 sensor condition
if ($mq2Value > 200) {
    $query3 = "INSERT INTO gassensor (sensor, value, datetime) VALUES ('Gas', '$mq2Value', NOW())";
    $result3 = mysqli_query($connect, $query3);

    if ($result3) {
        echo "gassensor data stored successfully!<br>";
    } else {
        echo "Error storing gassensor data: " . mysqli_error($connect) . "<br>";
    }
}

// Check rainwater sensor condition
if ($rainWaterValue > 500) {
    $query4 = "INSERT INTO waterleaksensor (sensor, value, datetime) VALUES ('Water leak', '$rainWaterValue', NOW())";
    $result4 = mysqli_query($connect, $query4);

    if ($result4) {
        echo "Rainwater data stored successfully!<br>";
    } else {
        echo "Error storing Rainwater data: " . mysqli_error($connect) . "<br>";
    }
}

// Check SW420 sensor condition
if ($sw420Value == "1") {
    $query5 = "INSERT INTO vibrationsensor (sensor, value, datetime) VALUES ('vibration', '$sw420Value', NOW())";
    $result5 = mysqli_query($connect, $query5);

    if ($result5) {
        echo "vibrationsensor data stored successfully!<br>";
    } else {
        echo "Error storing vibrationsensor data: " . mysqli_error($connect) . "<br>";
    }
}

// Store the data from Arduino every 30 seconds for all sensors
if (time() % 30 == 0) {
    // Store humidity data
    $query6 = "INSERT INTO humiditysensor (sensor, value, datetime) VALUES ('Humidity', '$humidity', NOW())";
    $result6 = mysqli_query($connect, $query6);
    if ($result6) {
        echo "Humidity data from Arduino stored successfully!<br>";
    } else {
        echo "Error storing Humidity data from Arduino: " . mysqli_error($connect) . "<br>";
    }

    // Store temperature data
    $query7 = "INSERT INTO temperaturesensor (sensor, value, datetime) VALUES ('Temperature', '$temperature', NOW())";
    $result7 = mysqli_query($connect, $query7);
    if ($result7) {
        echo "Temperature data from Arduino stored successfully!<br>";
    } else {
        echo "Error storing Temperature data from Arduino: " . mysqli_error($connect) . "<br>";
    }

    // Store MQ2 sensor data
    $query8 = "INSERT INTO gassensor (sensor, value, datetime) VALUES ('Gas', '$mq2Value', NOW())";
    $result8 = mysqli_query($connect, $query8);
    if ($result8) {
        echo "gassensor data from Arduino stored successfully!<br>";
    } else {
        echo "Error storing gassensor data from Arduino: " . mysqli_error($connect) . "<br>";
    }

    // Store rainwater data
    $query9 = "INSERT INTO waterleaksensor (sensor, value, datetime) VALUES ('Water leak', '$rainWaterValue', NOW())";
    $result9 = mysqli_query($connect, $query9);
    if ($result9) {
        echo "Rainwater data from Arduino stored successfully!<br>";
    } else {
        echo "Error storing Rainwater data from Arduino: " . mysqli_error($connect) . "<br>";
    }

    // Store SW420 sensor data
    $query10 = "INSERT INTO vibrationsensor (sensor, value, datetime) VALUES ('Vibration', '$sw420Value', NOW())";
    $result10 = mysqli_query($connect, $query10);
    if ($result10) {
        echo "vibrationsensor data from Arduino stored successfully!<br>";
    } else {
        echo "Error storing vibrationsensor data from Arduino: " . mysqli_error($connect) . "<br>";
    }
}

mysqli_close($connect);

?>
