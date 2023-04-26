<?php
// this will make sure that the user is logged into their account after registration 
session_start();

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', 'janani@1234', 'erectassistant');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
// stores the details from form in the following variables
// mysqli_real_escape_string this escapes any special characters that the user might have typed into the input field
// mysqli_real_escape_string this keeps the webpage secured by preventing SQL injection
$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);

//VALIDATION

if (strlen($fname) < 2) {
    // bekow is user defined errors
    echo 'fname'; 
} elseif (strlen($lname) < 2) {
    echo 'lname';
} elseif (strlen($email) <= 4) {
    echo 'eshort';
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} elseif (strlen($password) <= 4) {
    echo 'pshort';
	
//VALIDATION
	
} else {
	
	//PASSWORD ENCRYPT
    // password_hash hash a plain text password into a 60 character stream
	$spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
	
	$query = "SELECT * FROM members WHERE email='$email'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
		if ($num_row < 1) {
// inserting new user
			$insert_row = $mysqli->query("INSERT INTO members (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$spassword')");

			if ($insert_row) {
// if row insertion is successfull we create 3 session variables
// these session variables stores record ID and ID will be stores in the session variable called login
				$_SESSION['login'] = $mysqli->insert_id;
				$_SESSION['fname'] = $fname;
				$_SESSION['lname'] = $lname;

				echo 'true';

			}

		} 
        else {

			echo 'false';
		}
		
}

?>