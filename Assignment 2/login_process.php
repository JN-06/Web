<?php
session_start();
include("db_connect.php"); // You should have a file that connects to your DB

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // --- Admin Login Check ---
    $admin_sql = "SELECT * FROM admin WHERE email = ?";
    $admin_stmt = $conn->prepare($admin_sql);
    $admin_stmt->bind_param("s", $email);
    $admin_stmt->execute();
    $admin_result = $admin_stmt->get_result();

    if ($admin_result->num_rows === 1) {
        $admin = $admin_result->fetch_assoc();
        if (password_verify($password, $admin['password'])) {
            $_SESSION["role"] = "admin";
            $_SESSION["email"] = $email;
            header("Location: admin_dashboard.php");
            exit();
        }
    }

    // --- User Login Check ---
    $user_sql = "SELECT * FROM user WHERE email = ?";
    $user_stmt = $conn->prepare($user_sql);
    $user_stmt->bind_param("s", $email);
    $user_stmt->execute();
    $user_result = $user_stmt->get_result();

    if ($user_result->num_rows === 1) {
        $user = $user_result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION["role"] = "user";
            $_SESSION["email"] = $email;
            header("Location: index.php");
            exit();
        }
    }

    // If no match found
    echo "Invalid email or password. <a href='login.php'>Go back</a>";
    exit();

} else {
    header("Location: login.php");
    exit();
}
?>
