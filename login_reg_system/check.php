<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "9913";
$dbname = "mydb";
$errors = array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//Registration
if(isset($_POST['reg_user'])){

	

	//recive all inputs
		$first_name = mysqli_real_escape_string($conn, $_POST['FirstName']);

		$last_name = mysqli_real_escape_string($conn, $_POST['LastName']);

		$gender = mysqli_real_escape_string($conn, $_POST['gender']);

		$mobile_no = mysqli_real_escape_string($conn, $_POST['MobileNo']);

		$email_id = mysqli_real_escape_string($conn, $_POST['Email']);

		$password_1 = mysqli_real_escape_string($conn, $_POST['Password_1']);

		$password_2 = mysqli_real_escape_string($conn, $_POST['Password_2']);

		$YYYY = mysqli_real_escape_string($conn, $_POST['BirthYear']);
		$MM = mysqli_real_escape_string($conn, $_POST['BirthMonth']);
		$DD = mysqli_real_escape_string($conn, $_POST['BirthDay']);

		$DOB = $YYYY .'-' .$MM .'-' .$DD ;
		

		//form validation
		if (empty($first_name)) { array_push($errors, "required"); }
		if (empty($last_name)) { array_push($errors, "required"); }
		if (empty($gender)) { array_push($errors, "required"); }
		if (empty($mobile_no)) { array_push($errors, "required"); }
		if (empty($email_id)) { array_push($errors, "required"); }
		if (empty($DOB)) { array_push($errors, "required"); }

		if ($password_1 != $password_2) {
					array_push($errors, "passwords do not match");
				}
		//inserting details into DB
		if (count($errors) == 0) {
		
				$password = md5($password_1);//encrypt the password
				$query = "INSERT INTO User_list (FirstName, LastName, DateOfBirth, Gender, MobileNo, Email, password)
				VALUES ('$first_name','$last_name','$DOB','$gender','$mobile_no','$email_id','$password' )";

				mysqli_query($conn, $query);

				$_SESSION['username'] = $email_id;
				$_SESSION['success'] = "you are now logeed in";
				header('location: index.php');
		}
}

//Login
if(isset($_POST['login_user'])){

		$useremail = mysqli_real_escape_string($conn, $_POST['Email']);
		$password = mysqli_real_escape_string($conn, $_POST['Password']);


		if (empty($useremail)) {array_push($errors, "Username is required");}
		if (empty($password)) {array_push($errors, "Password is required");}


		if (count($errors) == 0) {
			
				$password = md5($password);
				$query = "SELECT * FROM  User_list WHERE Email='$useremail' AND password='$password'";
				$results = mysqli_query($conn, $query);

				if (mysqli_num_rows($results) == 1) {
						
						$_SESSION['username'] = $useremail;
						$_SESSION['success'] = "You are now logged in";
						header('location: index.php');
				}else {

					array_push($errors, "Wrong username/password combination");
				}
		}

}	


?>