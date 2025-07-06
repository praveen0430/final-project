<?php
include "../db.php";
$id = $_POST['id'];
$status = $_POST['status'];
$conn->query("UPDATE complaints SET status='$status' WHERE id=$id");
header("Location: dashboard.php");
?>