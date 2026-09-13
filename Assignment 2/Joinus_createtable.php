<?php
require_once 'db_connect.php';

$sql = "CREATE TABLE IF NOT EXISTS job_app (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email TEXT,
    street TEXT,
    city TEXT,
    state TEXT,
    postcode INT(5),
    phone_num BIGINT(11) -- INT(11) is often too small, use BIGINT for phone numbers
)";

if (mysqli_query($conn, $sql)) {
    echo '<p>✅ Table <b>job_app</b> created successfully.</p>';
} else {
    error_log('❌ Create table error: ' . mysqli_error($conn));
    echo '<p>❌ Failed to create table. Check error logs.</p>';
}

mysqli_close($conn);
?>
