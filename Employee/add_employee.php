
<?php
// Include your database connection file (e.g., dbh.php)
include 'dbh.php';
include 'header2.php';




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data and sanitize
    $id = intval($_POST['id']); // Assuming id is an integer
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

     // Check if a file was uploaded
     if (isset($_FILES['photo'])) {
        $file = $_FILES['photo'];

        // Check if the file is an image
        if (getimagesize($file['tmp_name'])) {
            // Generate a unique filename
            $image_filename = uniqid() . '_' . $file['name'];

            // Define the upload path
            $upload_path = 'uploads/' . $image_filename; // Change 'uploads/' to your desired directory

            // Move the uploaded file to the specified directory
            if (move_uploaded_file($file['tmp_name'], $upload_path)) {
                // Insert data into the database
                $insert_query = "INSERT INTO employee (nameWithInitials, fullName, livingTown, homeTown, phone, address, expectedJob,trainingCenter, certificates, expYears, email, password, photo) 
                    VALUES ('$nameWithInitials', '$fullName', '$livingTown', '$homeTown', '$phone', '$address','$expectedJob','$trainingCenter','$certificates','$expYears', '$email','$password','$upload_path')";

                if (mysqli_query($conn, $insert_query)) {
                    // employee added successfully
                    echo '<script type="text/javascript">
                            window.onload = function () { 
                                alert("employee Added!"); 
                                window.location.href = "login.php";
                            }
                        </script>'; // Redirect to view_employee.php
                    exit;
                } else {
                    // Database insertion failed
                    header('Location: error_page.php'); // Redirect to an error page
                    exit;
                }
            } else {
                // File upload failed
                header('Location: error_page.php'); // Redirect to an error page
                exit;
            }
        } else {
            // The uploaded file is not an image
            header('Location: error_page.php'); // Redirect to an error page
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add employee</title>
    <link rel="stylesheet" href="lk.css">

</head>
<body>
    
    

    <div class="container">
    <h1>Add Employee</h1>
        <form action="add_employee.php" method="post" enctype="multipart/form-data">
            <label for="nameWithInitials">Name With Initials</label>
            <input type="text" name="nameWithInitials" required>

            <label for="fullName">Full Name</label>
            <input type="text" name="fullName" required>

            <label for="livingTown">Living Town</label>
            <input type="text" name="livingTown" required>

            <label for="homeTown">Home Town</label>
            <input type="text" name="homeTown" required>

            <label for="phone">Phone</label>
            <input type="text" name="phone" required>

            <label for="address">Address</label>
            <input type="text" name="address" required>

            <label for="expectedJob">Expected Job</label>
            <input type="text" name="expectedJob" required>

            <label for="trainingCenter">Vocational Training Center</label>
            <input type="text" name="trainingCenter" required>

            <label for="certificates">Vocational Training Certificates:</label><br>
            <textarea id="certificates" name="certificates" rows="4" cols="50"></textarea><br><br>
            
            <label for="expYears">Experienced Years</label>
            <input type="text" name="expYears" required>

            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" name="password" required>

            <label for="photo">Photo</label>
            <input type="file" name="photo" required>

            <button type="submit" name="submit">Add employee</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');

            form.addEventListener('submit', function(event) {
                let errorMessages = [];

                // Validation for Name With Initials and Full Name
                const nameWithInitials = form.querySelector('input[name="nameWithInitials"]').value;
                const fullName = form.querySelector('input[name="fullName"]').value;
                const nameRegex = /^[a-zA-Z\s]*$/; // Allows only letters and spaces
                if (!nameRegex.test(nameWithInitials) || !nameRegex.test(fullName)) {
                    errorMessages.push('Name should only contain letters and spaces.');
                }

                // Validation for Phone
                const phone = form.querySelector('input[name="phone"]').value;
                const phoneRegex = /^\d{10}$/; // 10 digit number
                if (!phoneRegex.test(phone)) {
                    errorMessages.push('Phone number should be a 10 digit number.');
                }

                // Validation for Experienced Years
                const expYears = form.querySelector('input[name="expYears"]').value;
                if (isNaN(expYears)) {
                    errorMessages.push('Experienced Years must be a number.');
                }

                // Displaying error messages if any
                if (errorMessages.length > 0) {
                    event.preventDefault(); // Prevent form submission
                    alert(errorMessages.join('\n'));
                }
            });
        });
    </script>
</div>
</body>
</html>
