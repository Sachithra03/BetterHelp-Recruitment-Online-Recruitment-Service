<?php
echo "Form submitted";
    require "Config.php";
    
    // Get POST data
    // Get POST data

$pmethod = $_POST['PaymentOption'];
$Cname = $_POST['NameOfCard'];
$amnt = $_POST['Amount'];
$cnum = $_POST['CardNumber'];
$exmonth = $_POST['ExpMonth'];
$exyear = $_POST['ExpYear'];
$cvv = $_POST['CVV'];


    // Prepare the SQL query
    $sql = "INSERT INTO paymentdetails (PaymentOption, NameOfCard, Amount, CardNumber, ExpMonth, ExpYear, CVV) 
            VALUES ('$pmethod', '$Cname', $amnt, '$cnum', '$exmonth', '$exyear', $cvv)";

    // Execute the query
    if ($con->query($sql)) {
        echo "<script> alert('Insert Successful!')</script>";

        echo "<script>window.location.href='PricingDetails.php';</script>";
    } else {
        echo "Error: " . $con->error;
    }

    // Close the database connection
    $con->close();
?>
