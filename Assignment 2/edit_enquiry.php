<?php
require_once 'db_connect.php';

$id = intval($_GET['id'] ?? 0);

$stmt = $conn->prepare("SELECT * FROM enquiries WHERE id = ?");
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$enquiry = $result->fetch_assoc();
$stmt->close();

if (!$enquiry) {
    exit("Enquiry not found.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone = $_POST['phone'] ?? '';
    $enquiryType = $_POST['enquiry'] ?? '';

    $stmt = $conn->prepare("UPDATE enquiries SET phone = ?, enquiry_type = ? WHERE id = ?");
    $stmt->bind_param('ssi', $phone, $enquiryType, $id);

    if ($stmt->execute()) {
        header("Location: view_enquiries.php");
        exit;
    } else {
        echo "Error updating: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Enquiry</title>
</head>
<body>
<h1>Edit Enquiry</h1>

<form method="post">
    <label>Phone:<br>
        <input type="text" name="phone" value="<?= htmlspecialchars($enquiry['phone']) ?>" required>
    </label><br><br>

    <label>Enquiry Type:<br>
        <input type="text" name="enquiry" value="<?= htmlspecialchars($enquiry['enquiry_type']) ?>" required>
    </label><br><br>

    <button type="submit">Update</button>
</form>

<p><a href="view_enquiries.php">Back to Enquiries</a></p>
</body>
</html>
