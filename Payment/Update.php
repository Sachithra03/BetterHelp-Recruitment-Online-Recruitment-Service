<?php
require 'Config.php'; // Assuming Config.php contains your database connection code

// Check if form fields are not empty
if (isset($_POST['PaymentOption'], $_POST['NameOfCard'], $_POST['Amount'], $_POST['CardNumber'], $_POST['ExpMonth'], $_POST['ExpYear'], $_POST['CVV'])) {
    // Retrieve form data
    $pmethod = $_POST['PaymentOption'];
    $Cname = $_POST['NameOfCard'];
    $amnt = $_POST['Amount'];
    $cnum = $_POST['CardNumber'];
    $exmonth = $_POST['ExpMonth'];
    $exyear = $_POST['ExpYear'];
    $cvv = $_POST['CVV'];

    // Check if any required field is empty
    if (empty($pmethod) || empty($Cname) || empty($amnt) || empty($cnum) || empty($exmonth) || empty($exyear) || empty($cvv)) {
        echo "All fields are required";
    } else {
        // Assuming you have $pid set somewhere in your code
        // Replace $pid with the actual Payment ID
        $pid = $_POST['payment_id'];

        // Prepare and execute the SQL statement using prepared statements to prevent SQL injection
        $sql = "UPDATE paymentdetails 
                SET PaymentOption='$pmethod', 
                    NameOfCard='$Cname', 
                    Amount='$amnt',
                    CardNumber=' $cnum ', 
                    ExpMonth='$exmonth',
                    ExpYear= '$exyear',
                    CVV='$cvv',
                WHERE PaymentID='$pid'";
        
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssisiiii", $pmethod, $Cname, $amnt, $cnum, $exmonth, $exyear, $cvv, $pid);
        
        if ($stmt->execute()) {
            echo "Payment details updated successfully";
        } else {
            echo "Error updating payment details: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }
} else {
    echo "All fields are required";
}

// Close the database connection
$con->close();
?>
