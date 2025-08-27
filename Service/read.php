<?php
require 'config.php';
require 'read.css';

$sql = "SELECT id, companyname, position, qualification, salary, experience, location, detail FROM postajob";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>Job ID</th>
            <th>Company Name</th>
            <th>Position</th>
            <th>Qualifications</th>
            <th>Salary</th>
            <th>Experience</th>
            <th>Location</th>
            <th>Detail</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>".
            "<td>".$row["companyname"]."</td>".
            "<td>".$row["position"]."</td>".
            "<td>".$row["qualification"]."</td>".
            "<td>".$row["salary"]."</td>".
            "<td>".$row["experience"]."</td>".
            "<td>".$row["location"]."</td>".
            "<td>".$row["detail"]."</td>".
            "<td><a href='update.php?id=" . $row['id'] . "'>Update</a></td>".
            "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No Results";
}

$con->close();
?>
