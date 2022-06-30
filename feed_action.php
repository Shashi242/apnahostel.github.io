<?php
include("conn.php");
$action=$_POST['action'];
 if($action=="add-fee")
  {
			if(!empty($_POST['name']) && !empty($_POST['mob']) && !empty($_POST['message']))
		{
			$name=($_POST['name']);
			$mobile=($_POST['mob']);
			$rat=($_POST['rat']);
			$mess=($_POST['message']);
		
			       $sql="INSERT INTO tbl_feedback(name,mobile,rate,suggestion) VALUES('$name','$mobile','$rat','$mess')";
					
			       mysql_query($sql);
			       if(mysql_affected_rows()>0)
			       {	
					echo "Feedback sent sucessfully";
				  }
			       else
			       {
					   echo "Something  wrong please check";
				   
			       }
				   
				   
		}	
			else
				{
					echo "Please complete form";
				}
			
  }
 
?>
