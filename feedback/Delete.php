<?php
require 'config.php';

// Check if the Feedback_ID is provided in the URL
if (isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $Feedback_ID = mysqli_real_escape_string($con, $_GET['id']);

    // Prepare SQL statement to delete the feedback entry
    $sql = "DELETE FROM feedback WHERE Feedback_ID = '$Feedback_ID'";

    // Execute the delete statement
    if ($con->query($sql)) {
        echo "Feedback deleted successfully.";
    } else {
        echo "Error deleting feedback: " . $con->error;
    }
} else {
    echo "Feedback_ID is not provided.";
}

// Close connection
$con->close();
?>
