<?php
// config.php
$conn = new mysqli("localhost", "root", "", "farmers_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>