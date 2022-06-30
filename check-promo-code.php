<?php

   include "conn.php";
          $id=$_POST['id'];
          $coupon=$_POST['coupon'];
		  $query="SELECT tbl_accomodation.accid,tbl_accomodation.city,tbl_city.promocode,tbl_city.discount from tbl_accomodation INNEr JOIN tbl_city on tbl_accomodation.city=tbl_city.name and tbl_accomodation.accid='$id'";
		  $smt1=mysqli_query($conn,$query);
		  $result=mysqli_fetch_assoc($smt1);
		  if($result['promocode']==$coupon)
		  {
			  echo "<b style='color:#34A853'>"."Valid Promocode : Got Rs.".$result['discount']."</b>";
		  }
		  else
		  {
			  echo "<b style='color:#f00'>Invalid Promocode.</b>";
		  }	
		  
?>