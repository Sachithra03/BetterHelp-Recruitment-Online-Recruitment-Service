<?php
$con=new mysqli("localhost","root","","recruitmentms");

if($con->connect_error)
{
    die("connection failed".$con->connection_error);
}
?>