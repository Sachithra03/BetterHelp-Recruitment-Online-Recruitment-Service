<?php
session_start();
if (!isset($_SESSION['Email'])){
    header('location:recLogin.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>BetterHelp Recruitment</title>
           <link rel="stylesheet" href="styles/styles.css">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    </head>
    <body>
      
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
                    <li><a href="">HOME</a></li>
                    <li><a href="">SERVICE</a></li>
                    <li><a href="">ABOUT US</a></li>
                    <li><a href="">CONTACT US</a></li>
                    <li><a href="">RATE</a></li>
                </ul>
            </div>
          
          <div class="text-box">
                <h1>Where Talent Meets Opportunity.</h1>
                  <p>We are responsible for your successfull future.</p>
                        <a href="#" class="job-button" >Browse job</a></button>
                       <a href="#" class="job-button" >Post a job</a></button>
          </div>

        </section>

        <!-----Industries----->
        <section class="industries">
            <h1>OUR KEY INDUSTRIES</h1>
                 <h3>Information Technology (IT)</h3>
                 <h3>Finance and Banking</h3>
                 <h3>Retail and E-commerce</h3>
                 <h3>Hospitality and Tourism</h3>
                 <h3>Construction and Real Estate</h3>
        </section>

        <hr />

        <!-----Footer----->

        <section class="footer">
            <div class="row">
                <div class="footer-col">
                    <h3>Why you should choose BetterHelp</h3>
                    <ul> 
                        <li>Expertise and Specialization.</li>
                        <li>Access to talent networks.</li>
                        <li>Flexibility and adaptability.</li>
                        <li>Worldwide job opportunities.</li>
                    </ul>
                </div>
        
                <div class="footer-col">
                    <h3>Our Responsibilities</h3>
                    <ul> 
                        <li>Creating job postings.</li>
                        <li>Candidate management.</li>
                        <li>Partnerships and collaborations.</li>
                        <li>Customer support and training.</li>
                    </ul>
                </div>
        
                <div class="footer-col">
                    <h3>Our legal and registration information</h3>
                    <ul> 
                        <li>Business license.</li>
                        <li>Tax registration.</li>
                        <li>Intellectual property protection.</li>
                        <li>Insurance coverage.</li>
                        <li>Data protection compliance.</li>
                    </ul>
                </div>

                <!---social meadia icons-->

                <div class="footer-col social-icons">
                    <h4>Find Us</h4>
                    <a href = "#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href = "#"><i class="fab fa-instagram"></i></a>
                    <a href ="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div> 

            <!--Authorisation-->

            <div class="author">
                © All Rights Reserved.
            </div>
        </section>
      
    </body>
</html>