<?php
if (isset($_GET['id'])) {
    include 'config.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM pulses WHERE id={$id}";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<article>
                <h2 class='text-2xl font-bold mb-4'>{$row['title']}</h2>
                <p class='text-gray-600'>{$row['content']}</p>
              </article>";
    } else {
        echo "<p>Pulse not found.</p>";
    }

    $conn->close();
}