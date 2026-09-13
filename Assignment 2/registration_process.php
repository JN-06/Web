<?php
session_start();
require_once 'db_connect.php';

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Invalid request method.');
}

// Retrieve and sanitize inputs
$name     = trim($_POST['name'] ?? '');
$email    = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirm  = $_POST['confirm-password'] ?? '';

// Validate required fields
if (empty($name) || empty($email) || empty($password) || empty($confirm)) {
    exit('All fields are required. <a href="registration.php">Go back</a>');
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('Invalid email format. <a href="registration.php">Go back</a>');
}

// Check if passwords match
if ($password !== $confirm) {
    exit('Passwords do not match. <a href="registration.php">Go back</a>');
}

// Check if email already exists
$stmt = $conn->prepare('SELECT id FROM register WHERE email = ?');
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->close();
    exit('Email is already registered. <a href="registration.php">Go back</a>');
}
$stmt->close();

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert user into database
$stmt = $conn->prepare('INSERT INTO register (name, email, password) VALUES (?, ?, ?)');
if (!$stmt) {
    error_log('Prepare failed: ' . $conn->error);
    exit('Unexpected error. Please try again later.');
}

$stmt->bind_param('sss', $name, $email, $hashedPassword);
if (!$stmt->execute()) {
    error_log('Execute failed: ' . $stmt->error);
    exit('Registration failed. Please try again later.');
}

$stmt->close();
$conn->close();

// Redirect to login page with success flag
header('Location: login.php?registered=1');
exit;
?>
