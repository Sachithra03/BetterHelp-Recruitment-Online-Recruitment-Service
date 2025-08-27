<?php

$serverName="localhost";
$userName="root";
$dbname="recruitmentms";
$dbpassword="";

$conn=mysqli_connect($serverName,$userName,$dbpassword,$dbname);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}