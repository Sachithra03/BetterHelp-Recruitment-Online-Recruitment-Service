<?php
include "config.php";
$id = $_GET["id"];
$sql = "DELETE FROM postajob WHERE id = $id";
$result = mysqli_query($conn,$sql); // Pass $conn as the first argument

if ($result) {
  header("Location:update.php ?msg=Data deleted successfully");
  exit; // It's a good practice to exit after redirecting
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>