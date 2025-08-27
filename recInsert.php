<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'config.php'; 

$recFname = $_POST["FirstName"];
$recLname = $_POST["LastName"];
$recTel = $_POST["PhoneNumber"];
$recNic = $_POST["NIC"];
$recCname = $_POST["CompanyName"];
$recCemail = $_POST["CompanyEmail"];
$recEmail = $_POST["Email"];
$recPwd = $_POST["Password"];
$recCpwd = $_POST["ConfirmPassword"];

// Check the passwords match
if ($recPwd !== $recCpwd) {
    echo "<script>alert('Passwords do not match'); window.history.back();</script>";
    exit(); 
}

// Check the email is already used email
$sql1 = "SELECT Email FROM recruiter WHERE Email='$recEmail'";
$result = $con->query($sql1);
if ($result->num_rows > 0) {
    echo "<script>
            if (confirm('This email is already used. Do you want to Login?')) {
                window.location.href='recLogin.php';
            } else {
                window.location.href='home.php';
            }
          </script>";
}

else {
    // Insert data 
    $sql = "INSERT INTO recruiter (FirstName, LastName, PhoneNumber, NIC, CompanyName, CompanyEmail, Email, Password, ConfirmPassword) 
    VALUES ('$recFname', '$recLname', '$recTel', '$recNic', '$recCname', '$recCemail', '$recEmail', '$recPwd', '$recCpwd')";

    if ($con->query($sql)) {
        echo "<script>alert('Insert Successful!')</script>";
        echo "<script>window.location.href='home.php';</script> ";
    } else {
        echo "Error: " . $con->error;
    }
}

$con->close();
?>
