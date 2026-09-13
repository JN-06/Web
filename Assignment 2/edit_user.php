<?php
session_start();
require_once 'db_connect.php';

$id = intval($_GET['id'] ?? 0);
if ($id <= 0) {
    exit('Invalid user ID.');
}

// Fetch current user data
$stmt = $conn->prepare('SELECT name, email FROM register WHERE id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

if (!$user) {
    exit('User not found.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = trim($_POST['name'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($name) || empty($email)) {
        $error = "Name and email are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } else {
        // Update query
        if (!empty($password)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare('UPDATE register SET name = ?, email = ?, password = ? WHERE id = ?');
            $stmt->bind_param('sssi', $name, $email, $hashedPassword, $id);
        } else {
            $stmt = $conn->prepare('UPDATE register SET name = ?, email = ? WHERE id = ?');
            $stmt->bind_param('ssi', $name, $email, $id);
        }

        if ($stmt->execute()) {
            header('Location: view_registration.php');
            exit();
        } else {
            $error = "Error updating user.";
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>

<h1>Edit User</h1>

<?php if (!empty($error)): ?>
    <p style="color: red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<form method="post">
    <label>Name:<br><input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required></label><br><br>
    <label>Email:<br><input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required></label><br><br>
    <label>New Password (leave blank to keep current):<br><input type="password" name="password"></label><br><br>
    <button type="submit">Update User</button>
</form>

<p><a href="view_registration.php">Back to user list</a></p>

</body>
</html>
