<?php
require 'db_config.php';

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if ($stmt = $conn->prepare("INSERT INTO queries (name, email, message) VALUES (?, ?, ?)")) {
  $stmt->bind_param("sss", $name, $email, $message);
  $stmt->execute();
  echo "Query submitted!";
} else {
  echo "Error: " . $conn->error;
}
$conn->close();
?>