<?php
/*
$host="localhost";
$db="test";
$uname="root";
$pass="";
$con=new mysqli($host,$uname,$pass,$db);
if($con->connect_error)
{
    echo"not connect";
}
*/
 $con=mysqli_connect("localhost","root","","test") or die("error at -------------------connection");

?>