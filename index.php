<?php
$insert = false;

if(isset($_POST['name'])){
      $server = "localhost";
      $username = "root";
      $password = "";
      $con = mysqli_connect($server, $username, $password);
      if(!$con){
        die("connection to this database failed due to" .
        mysqli_connect_error());  
     }
     //echo "success connection"
     $name = $_POST['name'];
     $age = $_POST['age'];
     $gender = $_POST['gender'];
     $email = $_POST['email'];
     $phone =$_POST ['phone'];
     $suggestions = $_POST['suggestions'];
     $sql =  "INSERT INTO `log in`. `log in` ( `name`, `age`, `gender`, `email`, `phone`, `suggestions`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$suggestions', NULL);";
    // echo "$sql";
     if($con->query($sql)==true){
         // echo "successfully inserted";
         $insert = true;
     }
     else{
          echo "ERROR: $sql <br> $con->error";
    
     }

     $con->close();
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to NIC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "header.html" ?>

    <div class="container">
        <h1>Welcome to nic</h1>
        <p>Enter your details and submit the form</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="suggestions" id="suggestions" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
            <button class="btn">reset</button> 
            <?php include "footer.html " ?>
        </form>
    </div>
     <script src="index.js"></script> 
    
</body>
</html>
