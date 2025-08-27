<?php

$login=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'config.php';

    $email = $_POST['Email'];
    $password = $_POST['Password'];
   
    
    $sql="SELECT * FROM recruiter WHERE Email = '$email' AND Password='$password' ";
    $result = mysqli_query($con, $sql);

    $user = $result->fetch_assoc();
    if ($result){

        $num=mysqli_num_rows($result);
        if($num>0){

           $login = 1;
           session_start();
           $_SESSION['Rec_ID']=$user["Rec_ID"];
           $_SESSION['FirstName']=$user["FirstName"]; 
           $_SESSION['LastName']=$user["LastName"];  
           $_SESSION['PhoneNumber']=$user["PhoneNumber"];  
           $_SESSION['NIC']=$user["NIC"]; 
           $_SESSION['CompanyName']=$user["CompanyName"];  
           $_SESSION['CompanyEmail']=$user["CompanyEmail"]; 
           $_SESSION['Email']=$user["Email"]; 
           $_SESSION['Password']=$user["Password"]; 
           $_SESSION['ConfirmPassword']=$user["ConfirmPassword"]; 

           header('location:homereguser.php');
           
        }
        else{
           $invalid=1;
        }
        if($login)
        {
            echo"<script> alart('Login Succesful.') </script>";
         }
          
          if($invalid)
          {
            echo "<script> alart('Incorrect User email or Password.')</script>" ;
          }
}

}   


    
?>