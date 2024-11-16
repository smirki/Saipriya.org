<?php
include 'config.php';

$sql = "SELECT * FROM pulses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='grid grid-cols-3 gap-4'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='card p-4 border border-gray-300 shadow-sm'>
        <h2 class='text-xl font-bold mb-2'>{$row['title']}</h2>
        <p class='text-gray-600'>" . substr($row['content'], 0, 150) . "...</p>
        <a href='?page=pulse&id={$row['id']}' class='text-blue-500 mt-4'>Read more</a>
        </div>";
        }
        echo "</div>";
        } else {
        echo "<p>No pulses found.</p>";
        }
        
        $conn->close();
