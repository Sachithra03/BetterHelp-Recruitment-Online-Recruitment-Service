<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="./update.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Job Post</title>
</head>
<body>
    <h2>Update Job Post</h2>
    <form method="post" action="update.php">

    <input type="hidden" id="id" name="id" value="1">

        
        <label for="cname">Company Name:</label><br>
        <input type="text" id="cname" name="cname"><br><br>

        <label for="cposition">Position:</label><br>
        <input type="text" id="cposition" name="cposition"><br><br>

        <label for="cqualification">Qualifications:</label><br>
        <input type="text" id="cqualification" name="cqualification"><br><br>

        <label for="csalary">Salary:</label><br>
        <input type="text" id="csalary" name="csalary"><br><br>

        <label for="cexperience">Experience:</label><br>
        <input type="text" id="cexperience" name="cexperience"><br><br>

        <label for="clocation">Location:</label><br>
        <input type="text" id="clocation" name="clocation"><br><br>

        <label for="cdetails">Details:</label><br>
        <textarea id="cdetails" name="cdetails" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>


<?php

require 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind parameters
    $sql = "UPDATE postajob 
            SET companyname=?, position=?, qualification=?, salary=?, 
                experience=?, location=?, detail=? 
            WHERE id=?";
    
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssssssi", $compName, $cPosition, $cqualifi, $csalary, $cexperi, $clocation, $cdetails, $id);
    
    // Set parameters and execute
    $compName = $_POST["cname"];
    $cPosition = $_POST["cposition"];
    $cqualifi = $_POST["cqualification"];
    $csalary = $_POST["csalary"];
    $cexperi = $_POST["cexperience"];
    $clocation = $_POST["clocation"];
    $cdetails = $_POST["cdetails"];
    $id = $_POST["id"]; // Assuming you have a hidden input field for id in your form
    
    if ($stmt->execute()) {
        echo "<script> alert('Update Successful!')</script>";
    } else {
        echo "Error: " . $con->error;
    }
    
    // Close statement and connection
    $stmt->close();
    $con->close();
}
?>
