<?php

if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to " . mysqli_connect_error());
    }
    // echo "Success connecting to the Database";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `ticket`.`ticket` ( `name`, `age`, `email`, `phone`, `dt`) VALUES ( '$name', '$age', '$email', '$phone', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true){
        // echo "Sucessfully inserted";
       
    }
    else{
        // echo "ERROR: $sql <br> $con->error";
    }

    $con->close(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book your tickets here</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="concert">
    <div class="container">
        <h3>Mumbai Music Festival</h3>
        <p>Register yourself to get ticket payment link</p>
        
        <form action="index.php" method="post">
            Name: <input type="text" name="name" id="name" placeholder="enter name"><br>
            Age:  <input type="text" name="age"  id="age" placeholder="enter age"><br>
            email: <input type="email" name="email"  id="email" placeholder="eg: abc@gmail.com"><br>
            Phone NO: <input type="phone" name="phone"  id="phone" placeholder="enter phone number"><br>
            Gender:<br>
             <input type="radio" name="Gender">Male<br>
            <input type="radio" name="Gender">Female<br>
            <input type="radio" name="Gender">Other<br>
            <input type="submit" value="register!" class="btn">
		    <input type="reset" name="reset" class="btn">

            
        </form>


    </div>
    <script src="index.js"></script>
    
</body>
</html>