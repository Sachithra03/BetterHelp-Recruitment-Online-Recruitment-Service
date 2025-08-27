<?php
// Include your database connection file (e.g., dbh.php)
include 'dbh.php';
include 'header2.php';

// Check if the ID parameter is passed through the URL
if (isset($_GET['id'])) {
    // Retrieve the Employee ID from the URL and sanitize it
    $id = intval($_GET['id']); // Assuming id is an integer

    // Fetch Employee details from the database
    $sql = "SELECT * FROM employee WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Assign Employee details to variables
        $nameWithInitials = $row['nameWithInitials'];
        $fullName = $row['fullName'];
        $livingTown = $row['livingTown'];
        $homeTown = $row['homeTown'];
        $phone = $row['phone'];
        $address = $row['address'];
        $expectedJob = $row['expectedJob'];
        $trainingCenter = $row['trainingCenter'];
        $certificates = $row['certificates'];
        $expYears = $row['expYears'];
        $email = $row['email'];
        $password = $row['password'];
        $photo = $row['photo']; // existing photo path
    } else {
        // Employee with the specified ID not found
        echo "Employee not found.";
        exit;
    }
} else {
    // ID parameter is not provided
    echo "Employee ID not specified.";
    exit;
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve updated data from the form
    $nameWithInitials = mysqli_real_escape_string($conn, $_POST['nameWithInitials']);
    $fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
    $livingTown = mysqli_real_escape_string($conn, $_POST['livingTown']);
    $homeTown = mysqli_real_escape_string($conn, $_POST['homeTown']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $expectedJob = mysqli_real_escape_string($conn, $_POST['expectedJob']);
    $trainingCenter = mysqli_real_escape_string($conn, $_POST['trainingCenter']);
    $certificates = mysqli_real_escape_string($conn, $_POST['certificates']);
    $expYears = mysqli_real_escape_string($conn, $_POST['expYears']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if a new file is uploaded
    if ($_FILES['photo']['name']) {
        // Handle file upload
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["photo"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                // Update employee data in the database with new photo path
                $photo = $target_file;
                $sql = "UPDATE employee SET 
                        nameWithInitials = '$nameWithInitials',
                        fullName = '$fullName',
                        livingTown = '$livingTown',
                        homeTown = '$homeTown',
                        phone = '$phone',
                        address = '$address',
                        expectedJob = '$expectedJob',
                        trainingCenter = '$trainingCenter',
                        certificates = '$certificates',
                        expYears = '$expYears',
                        email = '$email',
                        password = '$password',
                        photo = '$photo'
                        WHERE id = $id";

                if (mysqli_query($conn, $sql)) {
                    echo "Employee data updated successfully.";
                } else {
                    echo "Error updating employee data: " . mysqli_error($conn);
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        // Update employee data in the database without updating photo path
        $sql = "UPDATE employee SET 
                nameWithInitials = '$nameWithInitials',
                fullName = '$fullName',
                livingTown = '$livingTown',
                homeTown = '$homeTown',
                phone = '$phone',
                address = '$address',
                expectedJob = '$expectedJob',
                trainingCenter = '$trainingCenter',
                certificates = '$certificates',
                expYears = '$expYears',
                email = '$email',
                password = '$password'
                WHERE id = $id";

    // Check if the update was successful
if (mysqli_query($conn, $sql)) {
    // Redirect to view_employee.php
    header("Location: view_employee.php?id=$id");
    exit(); // Ensure that code execution stops after redirection
} else {
    echo "Error updating employee data: " . mysqli_error($conn);
}

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Employee</title>
    <style>

    </style>
</head>
<body>
<link rel="stylesheet" href="lk.css">


<div class="container">
<h1>Update Employee</h1>
    <!-- Update Employee Form -->
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="nameWithInitials">Name With Initials</label>
        <input type="text" name="nameWithInitials" value="<?php echo $nameWithInitials; ?>" required>

        <label for="fullName">Full Name</label>
        <input type="text" name="fullName" value="<?php echo $fullName; ?>" required>

        <label for="livingTown">Living Town</label>
        <input type="text" name="livingTown" value="<?php echo $livingTown; ?>" required>

        <label for="homeTown">Home Town</label>
        <input type="text" name="homeTown" value="<?php echo $homeTown; ?>" required>

        <label for="phone">Phone</label>
        <input type="text" name="phone" value="<?php echo $phone; ?>" required>

        <label for="address">Address</label>
        <input type="text" name="address" value="<?php echo $address; ?>" required>

        <label for="expectedJob">Expected Job</label>
        <input type="text" name="expectedJob" value="<?php echo $expectedJob; ?>" required>

        <label for="trainingCenter">Vocational Training Center</label>
        <input type="text" name="trainingCenter" value="<?php echo $trainingCenter; ?>" required>

        <label for="certificates">Vocational Training Certificates</label>
        <input type="text" name="certificates" value="<?php echo $certificates; ?>" required>

        <label for="expYears">Experienced Years</label>
        <input type="text" name="expYears" value="<?php echo $expYears; ?>" required>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>" required>

        <label for="password">Password</label>
        <input type="password" name="password" value="<?php echo $password; ?>" required>

        <label for="photo">Photo</label>
        <img src="<?php echo $photo; ?>" alt="Current Photo" style="max-width: 200px;">
        <input type="file" name="photo"><br><br>

        <button type="submit" name="submit">Update Employee</button>
    </form>
</div>
</body>
</html>
