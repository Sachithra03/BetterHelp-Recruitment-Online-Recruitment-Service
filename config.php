<?php

$con = new mysqli("localhost", "root", "", "RecruiterMS");

if($con->connect_error)
{
    die("Connection faild".$con->connect_error);
}


?>