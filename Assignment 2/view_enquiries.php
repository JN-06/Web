<?php
require_once 'db_connect.php';

$result = $conn->query("SELECT * FROM enquiries ORDER BY created_at DESC");
$enquiries = $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
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
<body class="index">

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

<section class="view_admin">
<h1>Enquiries</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Enquiry Type</th>
        <th>Date</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php if ($enquiries): ?>
        <?php foreach ($enquiries as $enquiry): ?>
            <tr>
                <td><?= htmlspecialchars($enquiry['id']) ?></td>
                <td><?= htmlspecialchars($enquiry['first_name'] . ' ' . $enquiry['last_name']) ?></td>
                <td><?= htmlspecialchars($enquiry['email']) ?></td>
                <td><?= htmlspecialchars($enquiry['phone']) ?></td>
                <td><?= htmlspecialchars($enquiry['enquiry_type']) ?></td>
                <td><?= htmlspecialchars($enquiry['created_at']) ?></td>
                <td><a href="edit_enquiry.php?id=<?= $enquiry['id'] ?>">Edit</a></td>
                <td><a href="delete_enquiry.php?id=<?= $enquiry['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr><td colspan="8">No enquiries found.</td></tr>
    <?php endif; ?>
</table>

    <p><a class="btn" href="admin_dashboard.php">Back to Dashboard</a></p>
</body>
</html>
<?php
mysqli_close($conn);
?>
