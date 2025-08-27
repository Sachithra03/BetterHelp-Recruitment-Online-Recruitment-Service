<?php
include_once 'config.php'; 


session_start();
if (!isset($_SESSION['Rec_ID'])) {
    echo "<script>alert('Insert Successful!')</script>";
    echo "<script>window.location.href='home.php';</script> ";

    exit(); 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Delete the user account 
    $userID = $_SESSION['Rec_ID'];
    $sql = "DELETE FROM recruiter WHERE Rec_ID = '$userID'";
    if (mysqli_query($con, $sql)) {
        session_unset();
        session_destroy();
        
      echo " <script>
            if (confirm('Are you sure you want to delete this profile?')) {
                window.location.href='home.php';
            } else {
                window.location.href='recProfile.php';
            }
        </script>";
        
        exit(); 
    } else {
        
        echo "Error: " . mysqli_error($con);
    }
} else {
    
    header('Location:home.php');
    exit(); 
}
?>