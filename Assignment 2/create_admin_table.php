<?php
require_once 'db_connect.php';

// Create the table
$sql = "CREATE TABLE IF NOT EXISTS admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";
$conn->query($sql);

// Insert default admin
$name = 'Admin';
$email = 'admin@example.com';
$plain_password = 'admin';
$hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);

// Avoid duplicate insert
$stmt = $conn->prepare("SELECT id FROM admin WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
    $insert = $conn->prepare("INSERT INTO admin (name, email, password) VALUES (?, ?, ?)");
    $insert->bind_param("sss", $name, $email, $hashed_password);
    $insert->execute();
    echo "✅ Admin created. Email: $email | Password: $plain_password";
    $insert->close();
} else {
    echo "ℹ️ Admin already exists.";
}

$stmt->close();
$conn->close();
?>
