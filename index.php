<?php
$insert = false;
if (isset($_POST['name'])) {
    //set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "lpu trip";  // Ensure this is the correct DB name from phpMyAdmin

    //  Correct way: Select database in the 4th parameter
    $con = mysqli_connect($server, $username, $password, $database);
// check for connection success
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Sucess connection to the db";


    // collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];  // assuming 'others' column in DB

    // Correct SQL
    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `others`, `dt`) 
            VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
// execute the query
    if ($con->query($sql) === TRUE) {
        //echo "Successfully inserted";
        $insert = true;// flag for sucessful insertion
    } else {
        echo "ERROR: $sql <br>" . $con->error;
        
    }
// close the data base connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Well come to TravelForm</title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Prop+Single:wght@100..900&family=Bitcount+Single:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <img class="bg" src="vaction.jpg" alt="LPU">
    <div class="container">
        <h3> Wellcome to LPU Saudi Trip form</h3>
        <p> Enter your details and submit this form confirm your participation in the trip </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. we are happy to see you joining us for the US Trip</p>";
        }
        ?>    
        <form action="index.php" method = "post">
            <input type = "text" name="name" id="name" placeholder="Enter your Name">
            <input type = "text" name="age" id="age"placeholder="Enter your Age">
            <input type = "text" name="gender" id="gender"placeholder="Enter your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="tel" name="phone" id="phone" placeholder="Enter your Phone number">
            <textarea name="desc" id="desc" cols ="30" rows="10" placeholder="Enter any other information"></textarea>
            <button class="btn" > Submit</button>
            


        </form>
    
    </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>

