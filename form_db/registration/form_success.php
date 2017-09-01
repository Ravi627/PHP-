<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
     <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "9913";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$first_name = mysqli_real_escape_string($conn, $_POST['FirstName']);

$last_name = mysqli_real_escape_string($conn, $_POST['LastName']);

$gender = mysqli_real_escape_string($conn, $_POST['gender']);

$mobile_no = mysqli_real_escape_string($conn, $_POST['MobileNo']);

$email_id = mysqli_real_escape_string($conn, $_POST['Email']);

$password = mysqli_real_escape_string($conn, $_POST['Password']);


$YYYY = mysqli_real_escape_string($conn, $_POST['BirthYear']);
$MM = mysqli_real_escape_string($conn, $_POST['BirthMonth']);
$DD = mysqli_real_escape_string($conn, $_POST['BirthDay']);

$DOB = $YYYY .'-' .$MM .'-' .$DD ;

$sql = "INSERT INTO list (FirstName, LastName, DateOfBirth, Gender, MobileNo, Email, password)
VALUES ('$first_name','$last_name','$DOB','$gender','$mobile_no','$email_id','$password' )";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "<h1><span>Hello " .$first_name. ", your details have been added.<br>";
     echo "your ID is </span>" .$last_id. "</h1>";
     

} else {
    echo "Error: " . $sql . "<br>" . $conn->error ;
}

$conn->close();

?>
<div class="form">
 
 <h1><span>Your detials are</span></h1><br>
 
     
<p class="contact"><h2> Name : <?= $first_name ?>  <?= $last_name ?></h2></p>
<p class="contact"><h2>Date of Birth : <?= $DOB ?> </h2></p>
<p class="contact"><h2>Gender : <?= $gender ?></h2></p>

<br><h1>Contact information</h1><br>
<p class="contact"><h2>Email ID <?= $email_id ?></h2></p>
<p class="contact"><h2> Mobile NO. :<?= $mobile_no ?></h2></p><br>

     
</div>
<br>
<br>
<br>
<center><h1>Thank you.</h1></center>
</body>
</html>