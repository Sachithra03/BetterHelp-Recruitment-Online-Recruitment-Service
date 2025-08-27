<?php

    require 'config.php';


    echo "<button>Add Employee</button><br/><br/>";


    $sql = "SELECT Rec_ID, First_Name, Last_Name, Phone_Number, NIC, Company_Name, Company_Email, Email FROM recruiter";

    $result = $con -> query($sql);

    if($result -> num_rows > 0)
    {
        echo"<table border='1'>";
        while($row = $result -> fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$row["Rec_ID"]."</td>"."<td>".$row["First_Name"]."</td>"."<td>".$row["Last_Name"]."</td>"."<td>".$row["Phone_Number"]."</td>"."<td>".$row["NIC"]."</td>"."<td>".$row["Company_Name"]."</td>"."<td>".$row["Company_Email"]."</td>"."<td>".$row["Email"]."<br/>";
            
        // Update button
        echo "<td><a href='recUpdate.php' id=".$row['Rec_ID']."'>Update</a></td>";

        // Delete button
        echo "<td><a href='recDelete.php id=".$row['Rec_ID']."'>Delete</a></td>";
            
            echo "</tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "No Results";
    }

    $con->close();

?> 
