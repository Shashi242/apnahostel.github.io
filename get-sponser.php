<?php

   include "conn.php";
          $cid=$_POST['Cid'];
		  $query="select name from candidate where mobile='$cid'";
		  $smt1=mysqli_query($conn,$query);
		  if($result=mysqli_fetch_assoc($smt1))
		  {
			  echo "<b>".$result['name']."</b>";
		  }
		  else
		  {
			  echo "<b>Reference number not Registered with ZOYOZO</b>";
		  }	
		  
		  	      
?>