<?php
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $email = $_POST['email'] ?? '';
    $street = $_POST['street'] ?? '';
    $city = $_POST['city'] ?? '';
    $state = $_POST['state'] ?? '';
    $postcode = $_POST['postcode'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $enquiryType = $_POST['enquiry'] ?? '';

    $stmt = $conn->prepare("INSERT INTO enquiries (first_name, last_name, email, street, city, state, postcode, phone, enquiry_type)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('sssssssss', $firstName, $lastName, $email, $street, $city, $state, $postcode, $phone, $enquiryType);

    if ($stmt->execute()) {
        header("Location: view_enquiries.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
