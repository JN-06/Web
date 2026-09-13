<?php
require_once 'db_connect.php';

$sql = "CREATE TABLE IF NOT EXISTS enquiries (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(25) NOT NULL,
    last_name VARCHAR(25) NOT NULL,
    email VARCHAR(255) NOT NULL,
    street VARCHAR(40) NOT NULL,
    city VARCHAR(20) NOT NULL,
    state VARCHAR(50) NOT NULL,
    postcode VARCHAR(5) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    enquiry_type VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo '<p>✅ Table <b>enquiries</b> created successfully.</p>';
} else {
    echo '<p>❌ Failed to create table: ' . mysqli_error($conn) . '</p>';
}

mysqli_close($conn);
?>
