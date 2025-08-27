<?php

require 'config.php';

$compName = $_POST["cname"];
$cPosition = $_POST["cposition"];
$cqualifi = $_POST["cqualification"];
$csalary = $_POST["csalary"];
$cexperi = $_POST["cexperience"];
$clocation = $_POST["clocation"];
$cdetails = $_POST["cdetails"];

$sql = "INSERT INTO postajob(companyname, position, qualification, salary, experience, location, detail) 
        VALUES ('$compName','$cPosition','$cqualifi','$csalary','$cexperi','$clocation', '$cdetails')";

if ($con->query($sql)) {
    echo "<script> alert('Insert Successful!')</script>";
} else {
    echo "Error: " . $con->error;
} 
$con->close();

?>
