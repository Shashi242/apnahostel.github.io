<?php

$conn =@mysqli_connect("localhost:3307","root","","apnahostel_db");
	if(!$conn)
	{
		echo "Connection failed".mysqli_error($conn);
		exit();
	}
?>
