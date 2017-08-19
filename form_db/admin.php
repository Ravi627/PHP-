<!DOCTYPE html>
<html>
<head>
	<title>Registration details</title>
<style>
#RegList {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#RegList td, #RegList th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

#RegList tr:nth-child(even){background-color: #f2f2f2;}

#RegList tr:hover {background-color: #ddd;}

#RegList th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #7145b7;
    color: white;
}
</style>

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

$sql = "SELECT * FROM list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table id = 'RegList'><tr><th>ID</th><th>Name</th> <th>Date of Birth </th><th>Gender</th><th>Mobile No.</th><th>Email id</th><th> Regestration Date and Time</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["UserId"]."</td><td>".$row["FirstName"]." ".$row["LastName"].    "</td><td>"   .$row["DateOfBirth"]."</td><td>"  .$row["Gender"]."</td><td>".$row["MobileNo"]."</td><td>".$row["Email"]."</td><td>".$row["Registration_Date"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
