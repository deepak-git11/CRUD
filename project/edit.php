<?php
include('dbcon.php');
session_start();

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name= " viewport" content=" width='device-width', in initial-scale=1.0">
    <link rel='stylesheet' href='style.css' >
</head>
<body>
<header>
    <h1> edit page </h1>
    <h3> welcome <span> <?php  echo $_SESSION['id'] ?> </span> </h3>
    <nav>
        <a href='home.php' >HOME </a>
    </nav>
</header>
<main>
    <?php
    $id=$_SESSION['id'];
    if(isset($_POST['update'])){
        $n=$_POST['user'];
        $pas=$_POST['pass'];
        $em=$_POST['email'];
        $rol=$_POST['role'];
        $num=$_POST['number'];
        $ad=$_POST['add'];

       $sql=mysqli_query($con," UPDATE main SET uname='$n',pass=$pas ,email='$em', rol='$rol' , phone= $num ,addr='$ad' WHERE id=$id ");
        if($sql){
           ?>
           <script>alert('updated');
            window.location.href='home.php';
        </script> 
           <?php

        }

    }
    else{

    
    $sql=mysqli_query($con,"SELECT * FROM main WHERE id=$id");
    while($row=mysqli_fetch_assoc($sql)){
        $name=$row['uname'];
        $pass=$row['pass'];
        $em=$row['email'];
        $role=$row['rol'];
        $ph=$row['phone'];
        $add=$row['addr'];

    }

    ?>
<form method="POST" action="" >
        <h1>LOG IN </h1>
        <br>
        <div>
            <label for="id" >Userid :</label>
            <input type="text" name="id" id="id" value="<?php echo $id ?>" disabled >
        </div>
        <div>
            <label for="user" >Username :</label>
            <input type="text" name="user" id="user" value="<?php echo $name ?>"  required >
        </div>
        <div>
            <label for="password" >password :</label>
            <input type="password" id="pass" name="pass"value="<?php echo $pass ?>" >
        </div>
        <div>
            <label for="email" >Email :</label>
            <input type="email" id="email" name="email" value="<?php echo $em ?>" >
        </div>
        <div>
            <label for="text" >Role :</label>
            <input type="text" id="role" name="role" value="<?php echo $role ?>" >
        </div>
        <div>
            <label for="number" >phone-number :</label>
            <input type="number"  name="number" value="<?php echo $ph ?>" >
        </div>
        <div>
            <label for="add" >Address :</label>
            <input type="text"  name="add" value="<?php echo $add ?>" >
        </div>
        <div>
            <button name='update' id='update' >UPDATE</button>
        </div>
       
    </form>
    <?php
    }
    
    ?>

</main>


</body>


</html>