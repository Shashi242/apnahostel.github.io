<?php
require "conn.php";
 $action=$_POST['action'];
 function getCurId()
    {
        include "./conn.php";
    								
        $sql="select * from candidate order by id desc limit 1";
        $smt=mysqli_query($conn,$sql);
        $rs=mysqli_fetch_assoc($smt);
        
       return($rs['mobile']);
    }
if($action=="registration")
	{
	    
	    
	 if($_POST['name'] && $_POST['mobile'] && $_POST['aadhar'])
	 {
	     
	 $cid=strtoupper($_POST['cid']);
	 $name=$_POST['name'];
	 $mobile=$_POST['mobile'];
	 $password=$_POST['aadhar'];
	 require("./conn.php");
     
			
			$sql="insert into candidate(
			jdate,
			sponser_id,
			name,
			mobile,
			password,
			wallet,
			status)values(CURDATE(),'$cid','$name','$mobile','$password','0','1')";
		
			$result=mysqli_query($conn,$sql);
			if($result)
			{
			
			$smstext="Dear ".$name." , \nThank you for choosing Apna Hostel.";
			echo $smstext;
			If($cid!="" and $cid!=null)
			{
			paySponser($cid,$mobile,200);
			
			paySponser($mobile,$mobile,100);
			}
			
			}
			else
			{
		    echo "Sorry Not Registered, Your mobile may be allready registered.".mysqli_error($conn);
			}
			
			
		}
	 else
		{
			 echo "Invalid Data/Sponser, Please check and try again.".mysqli_error($conn);
		}
}
else if ($action=="save-member")
  {
	        $cid=$_POST['cid'];
			$name=$_POST['name'];
			$gardian=$_POST['gardian'];
			$address=$_POST['address'];
			$district=$_POST['district'];
			$state=$_POST['state'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$status=$_POST['status'];
			
			$sql="update candidate set name='$name',guardian='$gardian',address='$address',district='$district',state='$state',email='$email',mobile='$mobile',status='$status' where ='$cid'";
			
			mysqli_query($conn,$sql);
			if(mysql_affected_rows()>0)
			{
				echo "Member Details Updated Successflly.";
			}
			
			
  }
 
////Functions*.....

function paySponser($cid,$mobile,$amt)
{
    include("./conn.php");
    if($cid!=NULL ||$cid!="")
    {
      $mid=$cid;
      date_default_timezone_set('Asia/Kolkata');
      $ctime= date("H:i:s"); 
      $sql2="INSERT INTO  tbl_sposor_income(trans_dt,trans_time,cid,team_id,total_income)VALUES(CURDATE(),'$ctime','$cid','$mobile','$amt')";
    			
			$res=mysqli_query($conn,$sql2);
			if($res>0)
			{	
		       $sql1="update  candidate set wallet=wallet+$amt where mobile='$cid'";
		       
	           mysqli_query($conn,$sql1);
			}
			else{
				echo mysql_error($conn);
			}
    }
  
}
 
 
 function getSponser($cid)
{
	require("./conn.php");
  $sql="select sponser_id as sponser from candidate where cid='$cid'";
  $smt=mysqli_query($conn,$sql);
  $rs=mysqli_fetch_assoc($smt);
  return($rs['sponser']);
}

function isSponser($pid)
   {
     require("./conn.php");
     $sql="select * from candidate where cid='$pid'";
     $smt=mysqli_query($conn,$sql);
     if($rs=mysqli_fetch_assoc($smt))
     {
      return(true);
     }
     return(false);
     
   }

function isRegister($mobile)
   {
     require("./conn.php");
     $sql="select * from candidate where mobile='$mobile'";
     $smt=mysqli_query($conn,$sql);
     if($rs=mysqli_fetch_assoc($smt))
     {
      return(true);
     }
     return(false);
     
   }
   
   function isSponserOk($cid)
   {
     require("./conn.php");
     $sql="select * from candidate where mobile='$cid'";
     $smt=mysqli_query($conn,$sql);
     if(mysqli_num_rows($smt))
      return(true);
    else
     return(false);
     
   }

function isAvailable($pid,$side)
   {
     require("./conn.php");
     $sql="select * from parent_child where cid='$pid'";
     $smt=mysqli_query($conn,$sql);
     if($rs=mysqli_fetch_assoc($smt))
     {
          if($side=="Left" && $rs['lcid']=="NULL")
           return(true);
          else if($side=="Right" && $rs['rcid']=="NULL")
           return(true);
          else
           return(false);
     }
     return(false);
     
   }


function updateRelation($pid,$cid,$sponser)
{  
	require("./conn.php");
    $sql="select * from parent_child where cid='$pid'";
	$smt=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_assoc($smt);
	
			if($pid=="NULL")
			{
			$unilevel=0;
			$dna="/".$cid;
			}
			else
			{
			$unilevel=$rs['unilevel']+1;
			$dna=$rs['dna']."/".$cid;	
			} 
		$sql="INSERT INTO parent_child (doj,cid,pid,unilevel,dna,sponser)VALUES (SYSDATE(),'$cid','$sponser','$unilevel','$dna','$sponser')";
		mysqli_query($conn,$sql);
				
			
}

function getCurrentId()
{
require("./conn.php");
$sql="SELECT max(cid) as cid from candidate";
$smt=mysqli_query($conn,$sql);
$rs=mysqli_fetch_assoc($smt);
$curid=$rs['cid'];
return $curid;
}

function send_sms($mob,$smstext)
    {
  	    $url="http://bhashsms.com/api/sendmsg.php";
		$user="prakashgroup";
		$password="7544991791";
		$snderid="MPMIND";
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