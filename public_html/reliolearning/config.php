<?php
$servername = "localhost";
$username = "u176143505_saipriya";
$password = "Relio22!";
$dbname = "u176143505_reliolearn";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the "pulses" table exists and create it if it doesn't
$sql = "CREATE TABLE IF NOT EXISTS pulses (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(255) NOT NULL,
            content TEXT NOT NULL,
            timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error;
}
?>
