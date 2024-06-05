<?php
include('dbcon.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
    $id=$_SESSION['id'];
    $result=  mysqli_query($con," SELECT * FROM main WHERE id= $id ");
    while($row=mysqli_fetch_assoc($result))
    {
        $un= $row['uname'];
        $em=$row['email'] ;
        $ro= $row['rol'] ;
        $ph= $row['phone'] ;
        $add=$row['addr'];
    }
?>
    <header>
    <h1>HOME_PAGE</h1>
    <div>
        <h5>welcome <?php echo $un; ?></h5>
        <nav>
            <a href="#" >HOME</a>
            <a href="logout.php" id="rht">LOGOUT</a>
            <a href="edit.php" >EDIT</a>            
        </nav>
</header>


   <main>
        <div class="boxx">
           
          <div > <p> ID : <span> <?php  echo $id; ?> </span> </p>   </div>
          <div > <p> Name : <span> <?php  echo $un; ?> </span> </p>   </div>
          <div > <p> Email : <span> <?php  echo $em; ?> </span> </p>   </div>
          <div > <p> Role : <span> <?php  echo $ro; ?> </span> </p>   </div>
          <div > <p> Phone : <span> <?php  echo $ph; ?> </span> </p>   </div>
          <div > <p> Address : <span> <?php  echo $add; ?> </span> </p>   </div>

        </div>
        
    </div>
    
</main>
</body>
</html>