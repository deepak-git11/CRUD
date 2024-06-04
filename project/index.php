<?php
 include('dbcon.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="style.css">
<style>
    a{
        color:red !important;
    }
    </style>
</head>
<body>
<?php

if(isset($_POST['submit']))
{
$id=$_POST['id'];
$pass=$_POST['pass'];
$sql1="SELECT * FROM main WHERE id='$id' and pass='$pass' " ;
$row=$con->query($sql1);
$c=$con->affected_rows;
if($c==1)
{
     $_SESSION['id']=$id;
    header('location:home.php');
}
else
{
 ?>
 <div id="msg">
 <p> INCORRECT PASSWORD OR USERNAME!</p>
    <a href="index.php" >BACK</a>
</div>

 <?php
 

}
}
else
{

?>

    <h1 id="welcome">WELCOME TO OUR SITE</h1>
    <br>
    <form method="POST" action="" >
        <h2>LOG IN </h2>
        <br>
        <div>
            <label for="id" >Userid :</label>
            <input type="text" name="id" id="id" placeholder="enter id " >
            </div>
        <div>
            <label for="password" >password :</label>
            <input type="password" id="pass" name="pass" placeholder="enter password" >
        </div>
        <div>
            <input type="submit"  name="submit" value="log in" >
        </div>

        <div>
          <h4>  create new <span><a href="sign.php">account</a></span></h4>
        </div>
    </form>
    <br>
   <?php
}
   ?>
</body>
</html>
