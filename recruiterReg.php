<!DOCTYPE html>
<html >
<head>
    <title>Registration Form</title>
    <link rel ="stylesheet" href="styles/recruiterRegStyles.css">
    <script>
        function validateForm() {
            var phoneNumber = document.getElementById("phoneNumber").value;
            var phoneNumberPattern = /^\d{10}$/; //10-digit phone number
            
            if (!phoneNumberPattern.test(phoneNumber)) {
                alert("Please enter a valid 10-digit phone number.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="body">
        <div class="form-box">
             <h1>RECRUITER REGISTRATION</h1><br/><br/>
              <div>

              <form action="recinsert.php" method="post" class="recAccount" onsubmit="return validateForm();"> 
               
                     Full Name <br/>
                         <input type = "text" name="FirstName"  class= "name" id="content" placeholder= "First Name">
                         <input type= "text" name="LastName" class= "name" id="content" placeholder= "Last Name"> <br/><br/>
                    Phone Number <br/>
                         <input type ="tel" name="PhoneNumber" id="phoneNumber" class="phoneNO" placeholder="Mobile Number"><br/><br/>
                    NIC <br/>
                        <input type ="text" name="NIC" id="content" placeholder="NIC Number"><br/><br/>
                    Company Name<br/>
                        <input type="text" name="CompanyName" id="content" placeholder="Company Name"><br/><br/>
                    Company Email<br/>
                        <input type="email" name="CompanyEmail" id="content" placeholder="Company Email"><br/><br/>
                        <br/>
                    Email <br/>
                         <input type="email" name="Email" id="content" placeholder="Enter Email"> <br/><br/>
                    Password <br/>
                         <input type="password" name="Password" id="content" name ="create-password" placeholder="New Password"> <br/><br/>
                    Confirm Password </h5><br/>
                         <input type="password" name="ConfirmPassword"id="content" name="confirm-password" placeholder="Confirm Password"> <br/>

                    <input type="reset" class="clear-info" value="Clear">
                    <input type="submit" class="submit" name="Submit"  value="Create New Account">

                    <br/><br/>
                    <p>Already have a BetterHelp account?  <a href="recLogin.php" > Log in</a></p>
                 
                </form>   
        </div>
        
            
        </div>
    </div>
    
</body>
</html>