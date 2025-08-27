<?php
require 'Config.php';

// Check if PaymentID is set in the POST data
if(isset($_POST["PaymentID"])) {
    // Retrieve PaymentID from the POST data
    $pid = $_POST["PaymentID"];
    
    // Prepare the SQL statement to delete the record
    $sql = "DELETE FROM paymentdetails WHERE PaymentID=`$pid`";
    
    // Prepare and execute the statement
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $pid);
    
    if($stmt->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }
    
    // Close the statement
    $stmt->close();
} else {
    echo "PaymentID not provided";
}

// Close the database connection
$con->close();
?>
