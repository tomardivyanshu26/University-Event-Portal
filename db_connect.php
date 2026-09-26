<?php
if ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') {
    // 💻 Localhost (Your laptop with XAMPP)
    $servername = "localhost";
    $username   = "gaurav";
    $password   = "";
    $dbname     = "event_management";
} else {
    // 🌐 Live Server (InfinityFree)
    $servername = "sql206.infinityfree.com";
    $username   = "if0_43017104";
    $password   = "lYvT5tTgdT71vw";
    $dbname     = "if0_43017104_event_management";
}

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
