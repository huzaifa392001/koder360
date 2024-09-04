<?php

$servername = "localhost"; // Change to your database server
$username = "koder360_koder360"; // Change to your database username
$password = "o=Q-~m_A^r;y"; // Change to your database password
$dbname = "koder360_koder360"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}