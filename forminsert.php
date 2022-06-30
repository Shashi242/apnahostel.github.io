<?php 

$mysqlserverhost = "Localhost";
$database_name = "table_form";
$username_mysql = "root";
$password_mysql = "";
/* Create database connection */
	/*$connection = mysql_connect("localhost", "table_form","root", "pw");
	if (!$connection) {
		die("Database connection failed: ");
		}

/* Select a database 
	$db_select = mysql_select_db("table_form",$connection);
	if (!$db_select) {
		die("Database selection failed: ");
		}
?>
	
<!--?php
/* Insert data from form submission 
	
	$fname=$_POST['firstfield'];
	$lname=$_POST['secondfield'];
	$state=$_POST['thirdfield'];
	$date=$_POST['fourthfield'];
	
	$sql = "INSERT INTO table_form (dbfield1, dbfield2, dbfield3, dbfield4) VALUES ('$firstfield', '$secondfield', '$thirdfield', '$fourthfield')";
	mysql_query($sql) or die("Error: " . mysql_error());
			echo "1 record added";
		
?-->


	
<?php
/* Close connection 
	mysql_close($connection);
?>*/


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
	$firstfield = mysqli_real_escape_string($connection, sanitize($_POST["firstfield"]));
	$secondfield = mysqli_real_escape_string($connection, sanitize($_POST["secondfield"]));
	$thirdfield = mysqli_real_escape_string($connection, sanitize($_POST["thirdfield"]));
	$fourthfield = mysqli_real_escape_string($connection, sanitize($_POST["fourthfield"]));	 
	$sql = "INSERT INTO table_form (dbfield1, dbfield2, dbfield3, dbfield4) VALUES ('$firstfield', '$secondfield', '$thirdfield', '$fourthfield')";
	if (mysqli_query($connection, $sql)) {
		  echo "<h2><font color=blue>New record added to database.</font></h2>";
	} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}
	mysqli_close($connection);
}
