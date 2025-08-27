<?php 
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
    <div class="profile-box">

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
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="http://localhost/viva/Service/postAjob.php">SERVICE</a></li>
                    <li><a href="http://localhost/viva/Service/about.html">ABOUT US</a></li>
                    <li><a href="">CONTACT US</a></li>
                    <li><a href="http://localhost/viva/feedback/feedback.php">RATE</a></li>
                </ul>
            </div>
</section >  
        <div class="details">

          <h1>Update your profile </h1>
            <!-- Update Profile Form -->
            <form action="recUpdateProfile.php" method="POST">
                <h4>First Name:
                <input type="text" id="updatedFirstName" name="updatedFirstName" value="<?php echo isset($_SESSION['FirstName']) ? $_SESSION['FirstName'] : ''; ?>"><br/><br/>

                Last Name:
                <input type="text" id="updatedLastName" name="updatedLastName" value="<?php echo isset($_SESSION['LastName']) ? $_SESSION['LastName'] : ''; ?>"><br/><br/>

                Phone Number:
                <input type="text" id="updatedPhoneNumber" name="updatedPhoneNumber" value="<?php echo isset($_SESSION['PhoneNumber']) ? $_SESSION['PhoneNumber'] : ''; ?>"><br/><br/>

                NIC:</label>
                <input type="text" id="updatedNIC" name="updatedNIC" value="<?php echo isset($_SESSION['NIC']) ? $_SESSION['NIC'] : ''; ?>" ><br/><br/>

                Company Name:
                <input type="text" id="updatedCompanyName" name="updatedCompanyName" value="<?php echo isset($_SESSION['CompanyName']) ? $_SESSION['CompanyName'] : ''; ?>"><br/><br/>

                Company Email:
                <input type="text" id="updatedCompanyEmail" name="updatedCompanyEmail" value="<?php echo isset($_SESSION['CompanyEmail']) ? $_SESSION['CompanyEmail'] : ''; ?>"><br/><br/>

                Email:
                <input type="email" id="updatedEmail" name="updatedEmail"value="<?php echo isset($_SESSION['Email']) ? $_SESSION['Email'] : ''; ?>"><br/><br/></h4>

                <input type="submit" class="up-btn" id="update-btn" name="Submit" value="Update Profile">
            </form>
            

            <!-- Delete Profile -->
            <form action="recDelete.php" method="POST">
                <input type="submit" class="up-btn" id="delete-btn" value="Delete Profile">
            </form>
        </div>
    </div>
</body>
</html>
