<?php
$conn = new mysqli("localhost", "root", "", "society_portal");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>