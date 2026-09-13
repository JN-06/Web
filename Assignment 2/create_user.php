<?php
session_start();
require_once 'db_connect.php';

if (empty($_SESSION['is_admin'])) {
    exit('Access denied.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = trim($_POST['name'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($name) || empty($email) || empty($password)) {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare('INSERT INTO register (name, email, password) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $name, $email, $hashedPassword);
        if ($stmt->execute()) {
            header('Location: view_registration.php');
            exit();
        } else {
            $error = "Error creating user.";
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>

<h1>Create New User</h1>

<?php if (!empty($error)): ?>
    <p style="color: red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<form method="post">
    <label>Name:<br><input type="text" name="name" required></label><br><br>
    <label>Email:<br><input type="email" name="email" required></label><br><br>
    <label>Password:<br><input type="password" name="password" required></label><br><br>
    <button type="submit">Create User</button>
</form>

<p><a href="view_registration.php">Back to user list</a></p>

</body>
</html>
