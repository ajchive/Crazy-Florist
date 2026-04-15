<?php
$conn = new mysqli("localhost", "root", "", "crazy_florist");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>