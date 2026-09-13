<?php
session_start();
require_once 'db_connect.php';

$id = intval($_GET['id'] ?? 0);
if ($id <= 0) {
    exit('Invalid user ID.');
}

$stmt = $conn->prepare('DELETE FROM register WHERE id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->close();

header('Location: view_registration.php');
exit();
?>
