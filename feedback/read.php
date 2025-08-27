<?php
require 'config.php';

$sql = "SELECT Feedback_ID, Name, Comment FROM feedback";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    // Table headers
    echo "<tr><th>Feedback ID</th><th>Name</th><th>Comment</th><th>Update Option</th><th>Delete Option</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Feedback_ID"] . "</td>" . "<td>" . $row["Name"] . "</td>" . "<td>" . $row["Comment"] . "</td>";
        // Update button
        echo "<td><a href='Update.php?id=" . $row['Feedback_ID'] . "'>Update</a></td>";
        // Delete button
        echo "<td><a href='Delete.php?id=" . $row['Feedback_ID'] . "'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No results";
}

$con->close();
?>
