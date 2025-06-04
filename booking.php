<?php
require 'db_config.php';

// Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$address = $_POST['address'] ?? '';
$date = $_POST['date'] ?? '';
$service_type = $_POST['service'] ?? ''; 
$description = $_POST['description'] ?? '';

// Prepare and bind
if ($stmt = $conn->prepare("INSERT INTO bookings (name, email, mobile, address, service_type, date, description) VALUES (?, ?, ?, ?, ?, ?, ?)")) {
    $stmt->bind_param("sssssss", $name, $email, $mobile, $address, $service_type, $date, $description);
    $stmt->execute();
    echo "✅ Booking successful!";
    $stmt->close();
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
