eed <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if (!isset($_SESSION['Rec_ID'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Recruiter Profile</title>
    <link rel="stylesheet" href="styles/recProfileStyles.css">
</head>
<body class="profile-back">

<section class="header">
            <div class = "topbar">
                
                <ul>
                    <li><h1>BetterHelp.com</h1></li>
                    <li class="price-cl"><a href="#"> Pricing</a></li>
                    <li><button class="top-btn"><a href="recProfile.php">Profile</a></button></li>
                    <li><button class="top-btn"><a href="logout.php">Log out</a></button></li>
                </ul>
         
            </div>
            
              <div class="nav-links">
                <ul>
                    <li><a href="homereguser.php">HOME</a></li>
                    <li><a href="http://localhost/viva/Service/postAjob.php">SERVICE</a></li>
                    <li><a href="http://localhost/viva/Service/about.html">ABOUT US</a></li>
                    <li><a href="">CONTACT US</a></li>
                    <li><a href="http://localhost/viva/feedback/feedback.php">RATE</a></li>
                </ul>
            </div>
</section >        

        <div class="details">
                 <h1>User Profile</h1>
            <h4>First Name: <?php echo isset($_SESSION['FirstName']) ? $_SESSION['FirstName'] : ''; ?><br/><br/>
                 Last Name: <?php echo isset($_SESSION['LastName']) ? $_SESSION['LastName'] : ''; ?><br/><br/>
                Phone Number: <?php echo isset($_SESSION['PhoneNumber']) ? $_SESSION['PhoneNumber'] : ''; ?><br/><br/>
                NIC: <?php echo isset($_SESSION['NIC']) ? $_SESSION['NIC'] : ''; ?><br/><br/>
                Company Name: <?php echo isset($_SESSION['CompanyName']) ? $_SESSION['CompanyName'] : ''; ?><br/><br/>
                Company Email: <?php echo isset($_SESSION['CompanyEmail']) ? $_SESSION['CompanyEmail'] : ''; ?><br/><br/>
                Email: <?php echo isset($_SESSION['Email']) ? $_SESSION['Email'] : ''; ?></h4><br/>
            
                <form action="recUpdate.php" method="POST">
                <input type="submit" class="up-btn" id="update-btn" name="Submit" value="Update Profile">
            </form>
            </form>
            <form action="recDelete.php" method="POST">
                <input type="submit" class="up-btn" id="delete-btn" value="Delete Profile">
            </form>

        </div>
</body>
</html>