<?php
// Include your database connection file (e.g., dbh.php)
include 'dbh.php';

// Check if the ID parameter is passed through the URL
if (isset($_GET['id'])) {
    // Retrieve the employee ID from the URL and sanitize it
    $id = intval($_GET['id']); // Assuming id is an integer

    // Fetch employee details from the database
    $sql = "SELECT * FROM employee WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Assign employee details to variables
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
        // employee with the specified ID not found
        echo "employee not found.";
        exit;
    }
} else {
    // ID parameter is not provided
    echo "employee ID not specified.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update employee</title>
    <style>
        /* CSS for Update employee Form */
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        img {
            display: block;
            margin-bottom: 10px;
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<h1>Update employee</h1>

<div class="container">
<a href="update_employee.php?id=1">Update employee</a>

        <!-- Hidden input to store existing employee ID -->
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
        <input type="file" name="photo">

        <button type="submit" name="submit">Update Employe</button>
    </form>
</div>
</body>
</html>
