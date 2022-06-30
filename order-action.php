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
			$promocode=($_POST['coupon']);
			
			       $sql="INSERT INTO tbl_renter_request(date,accid,name,mobile,promocode,message,status) VALUES(CURDATE(),'$orderId','$name','$mobile','$promocode','$msg','0')";
					
			       $res=mysqli_query($conn,$sql);
			       if($res)
			       {	
					echo"<div class='alert alert-info'><strong>Request sent sucessfully, Contact you soon, ZOYOZO.</div>";
					//$smstext="Thank You for Choosing ZOYOZO\nBooking for Your hostel Id ".$orderId."confirmed\nWe will be back soon\nTeam ZOYOZO";
					//$mob=$mobile;
				    //send_sms($mob,$smstext);
				    
				    
				    //$smstext1="One hostel booking request received. ";
					//$mob1="7717790029";
				    //send_sms($mob1,$smstext1);
			       }
			       else
			       {
					   echo"<div class='alert alert-danger'><strong>Something!!</strong> wrong please check.....</div>".mysqli_error($conn);
				   
			       }
			}
			
			else
				{
					echo "<div class='alert alert-danger'><strong>Please!!</strong> Complete Form.</div>";
				}
			
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
