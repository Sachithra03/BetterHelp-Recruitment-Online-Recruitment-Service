<?php
require 'config.php';

$Feedback_ID = $_POST["Feedback_ID"];
$Name = $_POST["pname"];
$comment = $_POST["pcomment"];

if (empty($Feedback_ID) || empty($Name) || empty($comment)) {
    echo "All fields are required";
} else {
    // Prepare SQL statement
    $sql = "UPDATE feedback SET Name=?, Comment=? WHERE Feedback_ID=?";

    // Prepare and bind parameters
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssi", $Name, $comment, $Feedback_ID);

    // Execute the update statement
    if ($stmt->execute()) {
        echo "Updated!";
    } else {
        echo "Not Updated!";
    }

    // Close statement and connection
    $stmt->close();
    $con->close();
}
?>
