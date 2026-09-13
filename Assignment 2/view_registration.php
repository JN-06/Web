<?php 
session_start();
require_once 'db_connect.php';

// Fetch registrations
$result = $conn->query('SELECT id, name, email, created_at FROM register ORDER BY created_at DESC');
$registrations = $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
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
    <h1>User Account</h1>

    <table>
        <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Registered</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
        $sql = "SELECT id, name, email, created_at FROM register ORDER BY created_at DESC";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($result) > 0):
            while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['created_at']) ?></td>
                    <td>
                        <a href="edit_user.php?id=<?= $row['id']; ?>" title="Edit">
                            <i class="fas fa-edit" style="color: black;"></i>
                        </a>
                    </td>
                    <td>
                        <a href="delete_user.php?id=<?= $row['id']; ?>" onclick="return confirm('Are you sure?')" title="Delete">
                            <i class="fas fa-trash" style="color: black;"></i>
                        </a>
                    </td>
                </tr>
            <?php endwhile;
        else: ?>
            <tr>
                <td colspan="6">No registrations yet.</td>
            </tr>
        <?php endif;

        mysqli_close($conn);
        ?>

    </table>

    <p><a class="btn" href="admin_dashboard.php">Back to Dashboard</a></p>
</section>

</body>
</html>
