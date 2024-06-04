<?php
include('dbcon.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in page</title>
   <link  rel='stylesheet' href='style.css'>
</head>
<body>
    <?php
    if(isset($_POST['sign']))
    {
        $id=$_POST['id'];
        $name=$_POST['user'];
        $pas=$_POST['pass'];
        $em=$_POST['email'];
        $rol=$_POST['role'];
        $ph=$_POST['number'];
        $ad=$_POST['add'];
        $sql=mysqli_query($con," INSERT INTO `main`(`id`, `uname`, `pass`, `email`, `rol`, `phone`, `addr`) VALUES ($id,'$name',$pas,'$em','$rol',$ph,'$ad') ");
        if($sql)
        {
            $_SESSION['id']=$id;
            echo "
            <script> alert('sucessfully sign ');
            window.location.href='home.php';
            </script>
            ";
        }
    }else{

    ?>

    <h1 id="welcome">WELCOME TO OUR SITE</h1>
    <br>
    <form method="POST" action="" >
        <h1>LOG IN </h1>
        <br>
        <div>
            <label for="id" >Userid :</label>
            <input type="text" name="id" id="id" placeholder='enter userid' required>
        </div>
        <div>
            <label for="user" >Username :</label>
            <input type="text" name="user" id="user" placeholder="enter name" required >
        </div>
        <div>
            <label for="password" >password :</label>
            <input type="password" id="pass" name="pass" placeholder="enter password" >
        </div>
        <div>
            <label for="email" >Email :</label>
            <input type="email" id="email" name="email" placeholder="enter email" >
        </div>
        <div>
            <label for="text" >Role :</label>
            <input type="text" id="role" name="role" placeholder="enter role" >
        </div>
        <div>
            <label for="number" >phone-number :</label>
            <input type="number"  name="number" placeholder="enter phone number" >
        </div>
        <div>
            <label for="add" >Addrress :</label>
            <input type="text"  name="add" placeholder="enter address" >
        </div>
        <div>
            <button name='sign' id='sign' >SIGN UP</button>
        </div>
       
    </form>
<?php
    }
    ?>

</body>

    
</html>