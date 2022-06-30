<?php

$mysqlserverhost = "Localhost";
$database_name = "apnahostel_db";
$username_mysql = "root";
$password_mysql = "";

// ------------------------- Do not modify code under this field -------------------------- //


function sanitize($variable){
	$clean_variable = strip_tags($variable);
	$clean_variable = htmlentities($clean_variable, ENT_QUOTES, 'UTF-8');
	return $clean_variable;
}

function connect_to_mysqli($mysqlserverhost, $username_mysql, $password_mysql, $database_name){
	$connect = mysqli_connect($mysqlserverhost, $username_mysql, $password_mysql, $database_name);
	if (!$connect) {
		  die("Connection failed mysql: " . mysqli_connect_error());
	}
	return $connect;	
}

if(isset($_POST["processform"])){
	$connection = connect_to_mysqli($mysqlserverhost, $username_mysql, $password_mysql, $database_name);
	$firstfield1 = mysqli_real_escape_string($connection, sanitize($_POST["firstfield1"]));
	$secondfield1 = mysqli_real_escape_string($connection, sanitize($_POST["secondfield1"]));
	$thirdfield1 = mysqli_real_escape_string($connection, sanitize($_POST["thirdfield1"]));
	$fourthfield1 = mysqli_real_escape_string($connection, sanitize($_POST["fourthfield1"]));	 
	$sql = "INSERT INTO tbl_contact (first_name, last_name, email, message) VALUES ('$firstfield1', '$secondfield1', '$thirdfield1', '$fourthfield1')";
	if (mysqli_query($connection, $sql)) {
		  echo "<h2><font color=#2f4f4f>Your record added.</font></h2>";
	} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}
	mysqli_close($connection);
}

?>    
