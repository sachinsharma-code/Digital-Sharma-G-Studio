<?php
require 'db_config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];

$stmt = $conn->prepare("INSERT INTO ratings (name, email, rating, comment) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssis", $name, $email, $rating, $comment);
$stmt->execute();

$stmt->close();
$conn->close();

echo "Thank you for your feedback!";
?>
