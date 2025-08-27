<?php
require 'config.php';

// Retrieve Feedback_ID from the URL
$Feedback_ID = isset($_GET['id']) ? $_GET['id'] : null;

if (!$Feedback_ID) {
    echo "Feedback_ID is missing!";
    exit;
}

// Fetch feedback entry from the database
$sql = "SELECT Name, Comment FROM feedback WHERE Feedback_ID = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $Feedback_ID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Feedback not found!";
    exit;
}

$row = $result->fetch_assoc();
$name = $row['Name'];
$comment = $row['Comment'];

// Close statement and connection
$stmt->close();
$con->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Feedback</title>
</head>
<body>

<form action="update_process.php" method="post">
   
    <input type="hidden" name="Feedback_ID" value="<?php echo $Feedback_ID; ?>">

    <label for="pname">Name:</label><br>
    <input type="text" id="pname" name="pname" value="<?php echo $name; ?>"><br>
    <label for="pcomment">Comment:</label><br>
    <textarea id="pcomment" name="pcomment"><?php echo $comment; ?></textarea><br>
    <input type="submit" value="Update">
</form>

</body>
</html>
