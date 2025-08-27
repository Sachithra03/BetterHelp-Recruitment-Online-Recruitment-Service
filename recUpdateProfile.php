<?php
session_start();

// Check the user logged in
if (!isset($_SESSION['Rec_ID'])){
    header('location: login.php');
    exit();
}


require 'config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Submit"])) {
    //updated values 
    $recID = $_SESSION['Rec_ID'];
    $recFname = isset($_POST['updatedFirstName']) ? $_POST['updatedFirstName'] : '';
    $recLname = isset($_POST['updatedLastName']) ? $_POST['updatedLastName'] : '';
    $recTel = isset($_POST['updatedPhoneNumber']) ? $_POST['updatedPhoneNumber'] : '';
    $recNic = isset($_POST['updatedNIC']) ? $_POST['updatedNIC'] : '';
    $recCname = isset($_POST['updatedCompanyName']) ? $_POST['updatedCompanyName'] : '';
    $recCemail = isset($_POST['updatedCompanyEmail']) ? $_POST['updatedCompanyEmail'] : '';
    $recEmail = isset($_POST['updatedEmail']) ? $_POST['updatedEmail'] : '';

    // Update the new values
    $_SESSION['FirstName'] = $recFname;
    $_SESSION['LastName'] = $recLname;
    $_SESSION['PhoneNumber'] = $recTel;
    $_SESSION['NIC'] = $recNic;
    $_SESSION['CompanyName'] = $recCname;
    $_SESSION['CompanyEmail'] = $recCemail;
    $_SESSION['Email'] = $recEmail;

    //update the data in the database
    $sql = "UPDATE recruiter SET FirstName = ?,LastName = ?, PhoneNumber = ?, NIC = ?, CompanyName = ?, CompanyEmail = ?, Email = ? WHERE Rec_ID = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssssssi", $recFname,$recLname, $recTel, $recNic, $recCname, $recCemail, $recEmail, $recID);

    if ($stmt->execute()) {
        //  Show alert 
        echo "<script>alert('Update Successful.');
         window.location='recProfile.php';</script>";
        exit();
    } 
     else {
        echo "Error : " . $con->error;
    }
    $stmt->close();
} else {
    echo "Invalid request ";
}

$con->close();
?>
