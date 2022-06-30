<?php

$action=$_POST['action'];

if($action=="SendSms")
	{
		require "conn.php";
		$id=$_POST['id'];
		$sql="update  tbl_renter_request set status='1' where req_id='$id'";
		$res=mysqli_query($conn,$sql);
		if($res)
		{
			$owner_mob=getOwnerMobile($id);
			$smstext="One booking confermed by ZOYOZO,\n BOOKING ID-".$id."\n\Thank You\n www.zoyozo.in";
			send_sms($owner_mob,$smstext);
			
			
			
			
			$cust_mob=getCustMobile($id);
			$smstext="Your booking confermed by ZOYOZO,\n BOOKING ID-".$id." \n Please contact at \n".$owner_mob."\nThank You\n www.zoyozo.in";
			send_sms($cust_mob,$smstext);
			
			
			echo'SMS Sent';
		}
          else
		  {
			echo' SMS Already Sent';  
			}
 	 }
	 
	 
	 
	 
	 
function getCustMobile($req_id)
   {
     require("./conn.php");
     $sql="select mobile from tbl_renter_request where req_id='$req_id'";
     $smt=mysqli_query($conn,$sql);
     $rs=mysqli_fetch_assoc($smt);
     return($rs['mobile']);
     
   }	 
   
function getAccId($req_id)
   {
     require("./conn.php");
     $sql="select accid from tbl_renter_request where req_id='$req_id'";
     $smt=mysqli_query($conn,$sql);
     $rs=mysqli_fetch_assoc($smt);
     return($rs['accid']);
     
   }	 
function getOwnerMobile($req_id)
   {
     require("./conn.php");
	 
	 $accid=getAccId($req_id);
     $sql="select mobile from  tbl_accomodation where accid='$accid'";
     $smt=mysqli_query($conn,$sql);
     $rs=mysqli_fetch_assoc($smt);
     return($rs['mobile']);
     
   }
function send_sms($mob,$smstext)
    {
  	    $url="http://bhashsms.com/api/sendmsg.php";
		$user="prakashgroup";
		$password="7544991791";
		$snderid="ECSRNC";
		$mobile=$mob;
		$msg=$smstext;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'user='.$user.'&pass='.$password.'&sender='.$snderid.'&phone='.$mobile.'&text='.$msg.'&priority=ndnd&stype=normal');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
	
		                          						           
     }
?>