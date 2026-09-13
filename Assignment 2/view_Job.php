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
    <h1>Job Application</h1>

    <table>
        <tr> 
            <th>No</th>
            <th>Applicant Name</th>
            <th>Email</th>
            <th>Street</th>
            <th>City / Town</th>
            <th>State</th>
            <th>Postcode</th>
            <th>Phone Number</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "brew_go_coffee";

    // Define state array
    $states = ["Kedah", "Kelantan", "Malacca", "Negeri Sembilan", "Pahang", "Pinang", "Sabah", "Sarawak", "Selangor", "Terengganu", "Kuala Lumpur", "Labuan", "Putrajaya"];

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM job_app";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>

        <tr> 
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo htmlspecialchars($row["first_name"] . " " . $row["last_name"]); ?></td>
            <td><?php echo htmlspecialchars($row["email"]); ?></td>
            <td><?php echo htmlspecialchars($row["street"]); ?></td>
            <td><?php echo htmlspecialchars($row["city"]); ?></td>
            <td><?php echo htmlspecialchars($row["state"]); ?></td>
            <td><?php echo htmlspecialchars($row["postcode"]); ?></td>
            <td><?php echo htmlspecialchars($row["phone_num"]); ?></td>
            <td>
                <a href="edit_job.php?id=<?php echo $row['id']; ?>" title="Edit">
                    <i class="fas fa-edit" style="color: black;"></i>
                </a>
            </td>
            <td>
                <a href="delete_job.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')" title="Delete">
                    <i class="fas fa-trash" style="color: black;"></i>
                </a>
            </td>
        </tr>

    <?php
        }
    } else {
        echo '<tr><td colspan="10">No job applications found.</td></tr>';
    }

    mysqli_close($conn);
    ?>

    </table>

    <p><a class="btn" href="admin_dashboard.php">Back to Dashboard</a></p>
</section>

</body>
</html>
