<?php session_start();
include("conn.php");
$action=$_POST['action'];
 if($action=="add-order")
  {
		if(!empty($_POST['orderId']))
		{
			$name=$_SESSION['name'];
			$mobile=$_SESSION['cid'];
			$msg=($_POST['msg']);
			$orderId=($_POST['orderId']);
		
			       $sql="INSERT INTO tbl_order(name,date,id,mobile,message) VALUES('$name',CURDATE(),'$orderId','$mobile','$msg')";
					
			       $res=mysqli_query($conn,$sql);
			       if($res>0)
			       {	
					echo"<div class='alert alert-info'>Request sent sucessfully, Contact you soon, ZOYOZO.</div>";
					
					//$smstext="Thank You for Choosing ZOYOZO\nBooking for Your meal Id ".$orderId."confirmed\nWe will be back soon\nTeam ZOYOZO";
					//$mob=$mobile;
				    //send_sms($mob,$smstext);
				    
				    //$smstext1="One meal booking request received. ";
					//$mob1="7717790029";
				    //send_sms($mob1,$smstext1);
				    
			       }
			       else
			       {
					   echo"<div class='alert alert-danger'><strong>Something!!</strong> wrong please check.</div>";
				   
			       }
				   
				   }
			
			else
				{
					echo "<div class='alert alert-danger'><strong>Please!!</strong> complete form.</div>";
				}
			
  }
  function send_sms($mob,$smstext)
    {
  	    $url="http://bhashsms.com/api/sendmsg.php";
		$user="prakashgroup";
		$password="7544991791";
		$snderid="ZOYOZO";
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
