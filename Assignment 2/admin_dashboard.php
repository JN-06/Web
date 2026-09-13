<?php
session_start();
require_once 'db_connect.php';

// Restrict access to admin only
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brew-Go-Coffee</title>
    <link rel="stylesheet" type="text/css" href="admin_style.css">
</head>
<body>

<body class = "index">
<header class="header">  
    <img class="logo" src="logo.png" alt="logo" width="50" height="50">
    

    <nav>
    <ul class="nav_links">
            <li><a href="view_registration.php">User Account</a></li>
            <li><a href="view_enquiries.php">Service Enquiries</a></li>
            <li><a href="view_Job.php">Join Us Application</a></li>
        </ul>
    </nav>

    <p>
        <a class="cta" href="logout.php">Logout</a>
    </p>
</header>

<h1>Admin Dashboard</h1>
<p>
Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>! 
</p>

    

</body>
</html>
