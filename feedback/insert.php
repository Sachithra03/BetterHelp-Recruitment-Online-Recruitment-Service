<?php
require 'config.php';

// Validate and sanitize input
$persname = isset($_POST["pname"]) ? $_POST["pname"] : "";
$persfeed = isset($_POST["pcomment"]) ? $_POST["pcomment"] : "";

// Prepare SQL statement with placeholders
$sql = "INSERT INTO feedback (Name, Comment) VALUES (?, ?)";

// Prepare and bind parameters
$stmt = $con->prepare($sql);
$stmt->bind_param("ss", $persname, $persfeed);

// Execute the insert statement
if ($stmt->execute()) {
    echo "Insert successful";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$con->close();
?>
