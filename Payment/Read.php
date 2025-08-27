<?php
require 'Config.php'; // Assuming Config.php contains your database connection code

// Check if the connection is successful
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT PaymentID, PaymentOption, NameOfCard, Amount, CardNumber,ExpMonth, ExpYear,CVV FROM paymentdetails";
$result = $con->query($sql);

if ($result === false) {
    die("Error executing the query: " . $con->error);
}

if ($result->num_rows > 0) {
    // Output table header
    echo "<table border='1'>
            <tr>
                <th>Payment ID</th>
                <th>Payment Option</th>
                <th>Name Of Card</th>
                <th>Amount</th>
                <th>Card Number</th>
                <th>Expiration Month</th>
                <th>Expiration Year</th>
                <th>CVV</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>";

    // Output data of each row
while ($row = $result->fetch_assoc()) {
    // Output table row
    echo "<tr>
            <td>" . $row["PaymentID"] . "</td>
            <td>" . $row["PaymentOption"] . "</td>
            <td>" . $row["NameOfCard"] . "</td>
            <td>" . $row["Amount"] . "</td>
            <td>" . $row["NameOfCard"] . "</td>
            <td>" . $row["ExpMonth"] . "</td>
            <td>" . $row["ExpYear"] . "</td>
            <td>" . $row["CVV"] . "</td>
            <td><a href='Update.php?paymentID=" . $row['PaymentID'] . "'>Update</a></td>
            <td><a href='Delete.php?paymentID=" . $row['PaymentID'] . "'>Delete</a></td>
          </tr>";
}


    echo "</table>"; // Close the table
}
 else {
    echo "No results found";
}

// Close the database connection
$con->close();
?>
