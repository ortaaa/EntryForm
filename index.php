<?php
$insert=false;
if (isset ($_POST['Name'])) {

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
if (!$con) {
    die("connection to this database failed due to" . mysqli_connect_error());
}
//echo "Success connecting to db";

$Name= $_POST['Name'];
$Department= $_POST['Department'];
$Course= $_POST['Course'];
$RollNumber= $_POST['RollNumber'];
$Gender= $_POST['Gender'];
$Email= $_POST['Email'];
$Phone= $_POST['Phone'];
$desc= $_POST['desc'];


$sql = "INSERT INTO `bu_trip`.`trip` (`Name`, `Department`, `Course`, `RollNumber`, `Gender`, `Email`, `Phone`, `desc`, `date`) 
VALUES ('$Name', '$Department', '$Course', '$RollNumber', '$Gender', '$Email', '$Phone', '$desc', 
current_timestamp());";
//echo $sql;

if($con->query($sql) == true){
    //echo "Successfully Inserted";
    $insert =true;
    
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bu" src="bu.jpg" alt="Bundelkhand University, Jhansi">
    <div class="container">
    <h1>WELCOME TO BUNDELKAND UNIVERSITY TRIP FORM</h1>
    <p>Enter your details for your confirmation in the trip (B.U. Jhansi)</p>
    <?php
    if($insert==true){
    echo "<p class = 'lastmsg'>Thanks for submitting the form. We will see you soon in the trip.</p>";
    }
    ?>
    <form action="index.php" method="post">
        <input type="text" name="Name" id="Name" placeholder="Enter your name">
        <input type="text" name="Department" id="Department" placeholder="Enter your Department">
        <input type="text" name="Course" id="Course" placeholder="Enter your course">
        <input type="text" name="RollNumber" id="RollNumber" placeholder="Enter your Roll Number">
        <input type="text" name="Gender" id="Gender" placeholder="Enter your Gender">
        <input type="email" name="Email" id="Email" placeholder="Enter your email">
        <input type="text" name="Phone" id="Phone" placeholder="Enter your phone">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
        <button class="btn">Submit</button>
        <button class="btn">Reset</button>
        </form>
    </div>
    <script src="ind.js"></script>
    
</body>
</html>