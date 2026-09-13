<?php
require_once 'db_connect.php';

$id = intval($_GET['id'] ?? 0);

$stmt = $conn->prepare("DELETE FROM enquiries WHERE id = ?");
$stmt->bind_param('i', $id);

if ($stmt->execute()) {
    header("Location: view_enquiries.php");
    exit;
} else {
    echo "Error deleting: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
