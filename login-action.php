<?php

require "./conn.php";
if($_POST['id'] && $_POST['pwd'])
{
	$cid=$_POST['id'];
	$password=$_POST['pwd'];
	
//Sql Query for Sing In...
$sql="select * from candidate where mobile='$cid'";

$smt= mysqli_query($conn,$sql);

	if($rs=mysqli_fetch_assoc($smt))
	{
		if($password==$rs['password'])
		{
			//Creating Session...
			session_start();
			$_SESSION['cid'] = $rs['mobile'];
			$_SESSION['jdate'] = $rs['jdate'];
			$_SESSION['name']=$rs['name'];
			$_SESSION['address']=$rs['address'];
			$_SESSION['district']=$rs['district'];
			$_SESSION['state']=$rs['state'];
			$_SESSION['email']=$rs['email'];
			$_SESSION['password']=$rs['password'];
			$_SESSION['status'] = $rs['status'];
			$_SESSION['wallet']=$rs['wallet'];
			session_write_close();
			echo "1";
			}
			else
			{
			 echo'<div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Oops !</strong> Wrong Password.
     </div>'; 
			}
	}

	else
	{
		echo'<div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Oops !</strong> Wrong Mobile Number.
     </div>'.mysqli_error($conn);
	}
}
else
{
	echo'<div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Incomplete Form!</strong> Please Enter a Registered Mobile & Password.
     </div>';
}


?>