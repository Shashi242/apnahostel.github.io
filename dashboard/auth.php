<?php
	//Start session
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	session_start();
	if(!isset($_SESSION['role']) || (trim($_SESSION['role']) == null))
	{
		header("Location:./index.php");
	}
?>
    