<?php
	//Start session
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	session_start();
	if(!isset($_SESSION['cid']) || (trim($_SESSION['cid']) == null))
	{
		header("Location:./index.php");
	}
?>
    