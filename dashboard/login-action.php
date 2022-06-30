<?php session_start();
require "./conn.php";
if($_POST['email'] && $_POST['password'])
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	//echo $password;
	
//Sql Query for Sing In...
$sql="select * from tbl_admin where userid='$email'";
//echo $sql;
//exit();


$smt= mysqli_query($conn,$sql);

	if($rs=mysqli_fetch_assoc($smt))
	{
		if($password==$rs['password'])
		{
			//Creating Session...

			$_SESSION['email'] = $rs['userid'];
			$_SESSION['password']=$rs['password'];
			$_SESSION['role']=$rs['role'];
			session_write_close();
			echo "1";
			}
			else
			{
			 echo'<div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Wrong Password!</strong> Password is Wrong.
     </div>'; 
			}
	}

	else
	{
		echo'<div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Incorrect Admin ID!</strong> Admin ID is Incorrect.
     </div>';
	}
}
else
{
	echo'<div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Form Not Complate!</strong> Please enter Admin ID and Password .
     </div>';
}


?>