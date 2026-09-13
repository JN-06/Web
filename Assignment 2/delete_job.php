<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brew_go_coffee";

// Connect to DB
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get ID from URL
$id = $_GET['id'] ?? '';

if (!empty($id)) {
    $sql = "DELETE FROM job_app WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: view_Job.php");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid ID.";
}
?>
