<?php
/* ---------- Configuration ---------- */
$server   = 'localhost';
$username = 'root';             // XAMPP default
$password = '';                 // XAMPP default
$dbname   = 'brew_go_coffee';   // change if you prefer another name

/* ---------- Connect to MySQL (no DB selected yet) ---------- */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);   // throw exceptions
try {
    $conn = new mysqli($server, $username, $password);
    /* Always set the charset right after you connect */
    $conn->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    error_log('MySQL connect error: ' . $e->getMessage());
    exit('Database connection error. Please try again later.');
}

/* ---------- Create database if it doesn’t exist ---------- */
try {
    $conn->query("
        CREATE DATABASE IF NOT EXISTS `$dbname`
        CHARACTER SET utf8mb4
        COLLATE utf8mb4_unicode_ci
    ");
    $conn->select_db($dbname);
} catch (mysqli_sql_exception $e) {
    error_log('DB init error: ' . $e->getMessage());
    exit('Database error. Please try again later.');
}


?>
