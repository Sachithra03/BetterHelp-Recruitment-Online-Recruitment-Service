<?php
    // Include database connection
    include 'dbh.php';
    include 'header2.php';

    // Check if user is logged in (implement your own authentication logic)
    // For example, you might have session variables set after successful login
    session_start();
    if(!isset($_SESSION['user_id'])) {
        // Redirect the user to the login page if not logged in
        header("Location: login.php"); // Redirect to your login page
        exit();
    }

    // Retrieve logged-in user details from the database
    $userId = $_SESSION['user_id'];
    $sql = "SELECT * FROM employee WHERE id = $userId";
    $result = mysqli_query($conn, $sql);

    // Check if user exists
    if(mysqli_num_rows($result) == 0) {
        // Redirect or display a message if the user doesn't exist
        echo "User not found!";
        exit();
    }

    // Fetch user details
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Employee</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="up.css">
</head>
<body>
 
        </style>
 
    <div class="container">
        <h1>View Employee</h1>
        <div class="employees">
            <div class='employee'>
                <!-- Display user details -->
                
                

                    <img src="<?php echo htmlspecialchars($row['photo']); ?>" alt="employee Image" width="100">
                    <div class="employee-details">
                    <p><strong>Name With Initials:</strong> <?php echo htmlspecialchars($row['nameWithInitials']); ?></p>
                    <p><strong>Full Name:</strong> <?php echo htmlspecialchars($row['fullName']); ?></p>
                    <p><strong>Living Town:</strong> <?php echo htmlspecialchars($row['livingTown']); ?></p>
                    <p><strong>Home Town:</strong> <?php echo htmlspecialchars($row['homeTown']); ?></p>
                    <p><strong>Phone:</strong> <?php echo htmlspecialchars($row['phone']); ?></p>
                    <p><strong>Address:</strong> <?php echo htmlspecialchars($row['address']); ?></p>
                    <p><strong>Expected Job:</strong> <?php echo htmlspecialchars($row['expectedJob']); ?></p>
                    <p><strong>Training Center:</strong> <?php echo htmlspecialchars($row['trainingCenter']); ?></p>
                    <p><strong>Certificates:</strong> <?php echo htmlspecialchars($row['certificates']); ?></p>
                    <p><strong>Experienced Years:</strong> <?php echo htmlspecialchars($row['expYears']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($row['email']); ?></p>
                    <p><strong>Password:</strong> <?php echo htmlspecialchars($row['password']); ?></p>
                
                <!-- Edit and delete buttons -->
                <a href='update_employee.php?id=<?php echo $row['id']; ?>'><button>Edit</button></a>
                <a href='delete_employee.php?id=<?php echo $row['id']; ?>'><button class="delete-btn">Delete</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    // Free result set
    mysqli_free_result($result);

    // Close connection
    mysqli_close($conn);
?>
