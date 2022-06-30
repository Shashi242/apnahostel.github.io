
<?php
require "conn.php";
 $action=$_POST['action'];
 if($action=="add-image")
  {

		if(!empty($_POST['accid']))
		{
			session_start();
			$image=$_SESSION['file-url'];
			$accid=strtoupper($_POST['accid']);
			
			       $sql="INSERT INTO tbl_images(accid,img_url)VALUES('$accid','$image')";
			
			       $res=mysqli_query($conn,$sql);
			       if($res)
			       {	
					echo"<div class='alert alert-info'><strong>Successfully</strong> Image Added.</div>";
				    
			       }
			       else
			       {
					   echo"<div class='alert alert-danger'><strong>Something!!</strong> wrong please check.</div>";
				   
			       }
			

		}
		else
		{
			echo "<div class='alert alert-danger'><strong>Empty or Image!</strong>  Already  Registerd.</div>";
		}
		
  }
 
        

	
 ?>