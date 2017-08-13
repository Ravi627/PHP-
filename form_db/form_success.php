<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
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
$age = mysqli_real_escape_string($conn, $_POST['Age']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$mobile_no = mysqli_real_escape_string($conn, $_POST['MobileNo']);
$email_id = mysqli_real_escape_string($conn, $_POST['Email']);


$sql = "INSERT INTO list (firstname, lastname, age, gender, mobile_no, email)
VALUES ('$first_name','$last_name','$age','$gender','$mobile_no','$email_id' )";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "Hello " .$first_name. ", your details have been added.<br>";
     echo "your ID is " .$last_id ;
     echo "<br>Thank you.";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error ;
}

$conn->close();

?>
<!--
<pre>
 Your detials are

     Name: $first_name $last_name
     Age:  $age
     Gender $gender


echo "Contact Information" ;
  
	echo 'MobileNo.: '.$mobile_no. ;
  	echo "Email: " .$email_id. ;
</pre> -->
</body>
</html>