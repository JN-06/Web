<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edit Job Application</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body class="index">
<header class="header">
    <a href="index.php"><img class="logo" src="logo.png" alt="logo" width="50" height="50" /></a>
    <nav>
        <ul class="nav_links">
            <li><a href="view_membership.php">User Accounts</a></li>
            <li><a href="view_enquiry.php">Service Enquiry</a></li>
            <li><a href="view_Job.php">Join Us Form</a></li>
        </ul>
    </nav>
</header>

<?php
// edit_job.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brew_go_coffee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $street = mysqli_real_escape_string($conn, $_POST['street']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);
    $phone_num = mysqli_real_escape_string($conn, $_POST['phone_num']);

    $sql_update = "UPDATE job_app SET
        first_name='$first_name',
        last_name='$last_name',
        email='$email',
        street='$street',
        city='$city',
        state='$state',
        postcode='$postcode',
        phone_num='$phone_num'
        WHERE id=$id";

    if (mysqli_query($conn, $sql_update)) {
        header("Location: view_job.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM job_app WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (!$result || mysqli_num_rows($result) != 1) {
        die("Invalid ID or query error.");
    }

    $row = mysqli_fetch_assoc($result);
} else {
    die("ID is missing.");
}
?>



<br> <br>

<section>
<form action="edit_job.php" method="POST">
    <div class="join_us">
        <h1>Edit Job Application</h1>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />

        <p>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" maxlength="25" required pattern="[a-zA-Z\s]*" value="<?php echo htmlspecialchars($row['first_name']); ?>" />

            <br />

            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" maxlength="25" required pattern="[a-zA-Z\s]*" value="<?php echo htmlspecialchars($row['last_name']); ?>" />

            <br />

            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" required value="<?php echo htmlspecialchars($row['email']); ?>" />
        </p>

        <br />

        <fieldset>
            <legend>Address</legend>
            <p>
                <label for="street">Street Address</label>
                <input type="text" name="street" id="street" maxlength="40" required value="<?php echo htmlspecialchars($row['street']); ?>" />

                <br />

                <label for="city">City / Town</label>
                <input type="text" name="city" id="city" maxlength="20" required value="<?php echo htmlspecialchars($row['city']); ?>" />

                <br />

                <label for="state">State</label>
                <select name="state" id="state" required>
                    <option value="">Please select</option>
                    <?php
                    $states = [
                        "Johor", "Kedah", "Kelantan", "Malacca", "Negeri Sembilan", "Pahang", "Pinang", "Perak",
                        "Perlis", "Sarawak", "Sabah", "Selangor", "Terengganu", "Kuala Lumpur", "Labuan", "Putrajaya"
                    ];
                    foreach ($states as $state) {
                        $selected = ($row['state'] == $state) ? "selected" : "";
                        echo "<option value=\"$state\" $selected>$state</option>";
                    }
                    ?>
                </select>

                <br />

                <label for="postcode">Postcode</label>
                <input type="text" name="postcode" id="postcode" required pattern="\d{5}" value="<?php echo htmlspecialchars($row['postcode']); ?>" />
            </p>
        </fieldset>

        <br />

        <p>
            <label for="phone_num">Phone Number</label>
            <input type="text" name="phone_num" id="phone_num" required pattern="\d{10,11}" value="<?php echo htmlspecialchars($row['phone_num']); ?>" />

            <br />
        </p>

        <section>
            <div class="sub_re">
                <input type="submit" name="update" value="Update" class="button_style" />
                <!--<a href="view_job.php" class="button_style">Cancel</a> -->
            </div>
        </section>
    </div>
</form>
</section>

<br /><br />
<?php include("footer.php"); ?>
</body>
</html>
