<?php
$con=new mysqli("localhost","root","","RecruitmentMS");

if($con->connect_error)
{
    die("Connect failed.".$con->connection_error);
}

?>