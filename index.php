<?php
$insert = false;
if(isset($_POST['name'])){    //checks whether a variable is set, which means that it has to be declared and is not NULL. 
    //This function returns true if the variable exists and is not NULL, otherwise it returns false.
$server="localhost";
$username="root";
$password="";
$database="avalon trip"; //databse name is added

$connection= mysqli_connect($server,$username,$password, $database);
if(!$connection){
    die("The connection is failed".mysqli_connect_error());

}
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$mysql = "INSERT INTO `avalon trip`.`trip` (`Name`, `Age`, `Gender`, `Email`, `PhoneNum`, `Description`, `Timestamp`)
VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $mysql;

if($connection ->query($mysql)==true){
    // echo "success"; //if query is succesfully inserted then return true
    $insert=true;
}
else {echo "error: $mysql <br> $connection->error";
//if error is present
}
$connection->close();
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <div class="container">
        <h1>Welcome to Avalon Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining our trip</p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>
