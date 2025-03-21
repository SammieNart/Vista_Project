<?php
// Example array from form submission
$formData = $_POST;

$user="root";
$pass="";

// Database connection
$pdo = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Build the SQL query dynamically
$columns = implode(", ", array_keys($formData));
$placeholders = ":" . implode(", :", array_keys($formData));

$sql = "INSERT INTO your_table ($columns) VALUES ($placeholders)";
$stmt = $pdo->prepare($sql);

// Bind parameters dynamically
foreach ($formData as $key => &$value) {
    $stmt->bindParam(":$key", $value);
}

// Execute the query 
$stmt->execute();
?>