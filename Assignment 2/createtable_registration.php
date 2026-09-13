<?php
require_once 'db_connect.php';

$sql = "CREATE TABLE IF NOT EXISTS register (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
) ";

if (mysqli_query($conn, $sql)) {
    echo '<p>✅ Table <b>register</b> created successfully.</p>';
} else {
    error_log('❌ Create table error: ' . mysqli_error($conn));
    echo '<p>❌ Failed to create table. Check error logs.</p>';
}
?>
