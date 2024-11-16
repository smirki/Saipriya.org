<?php
include 'config.php';

$title = $_POST['title'];
$content = $_POST['content'];

$sql = "INSERT INTO pulses (title, content) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $title, $content);

if ($stmt->execute()) {
    header("Location: index.php?page=browse");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
