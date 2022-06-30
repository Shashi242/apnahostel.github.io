<?php
function getPin()
{
  require("conn.php");
  $cid=$_SESSION['cid'];
  $sql="select pin from candidate where cid='$cid'";
  $smt=mysqli_query($conn,$sql);
  $rs=mysqli_fetch_assoc($smt);
  return($rs['pin']);
}


?>
<?php
require "conn.php";
 $action=$_POST['action'];
 if($action=="activate-id")
  {

		if(!empty($_POST['paymemberid'])&&!empty($_POST['pin'])&&!empty($_POST['transpassword']))
		{
			$activate_member_id=$_POST['paymemberid'];
			$no_of_pin=$_POST['pin'];
			$tpassword=$_POST['transpassword'];
			session_start();
			$cid=$_SESSION['cid'];
			$pin=$_SESSION['pin'];
			if($no_of_pin <= getPin())
			{
			       if($tpassword==$_SESSION['transaction_pass'])
		           {
			       $sql="INSERT INTO  tbl_use_pin(cid,activate_member_id,no_of_pin,trans_dt)VALUES('$cid','$activate_member_id','$no_of_pin',CURDATE())";
			
			       $res=mysqli_query($conn,$sql);
			       if($res)
			       {	
		            $sql1="update  candidate set pin = pin -'$no_of_pin' where cid='$cid'";	
	                mysqli_query($conn,$sql1);
			         $sql1="update  candidate set activation_date=CURDATE(),pkg_amt=pkg_amt +(750 * '$no_of_pin'),bv=bv +(450 * '$no_of_pin'),status ='1' where cid='$activate_member_id'";	
									 mysqli_query($conn,$sql1);
									 
									 $mob=getMobile($activate_member_id);
									 $smstext="Dear ".getName($activate_member_id)." , Your ID ".$activate_member_id." activated successfully.\nRegards\nwww.byooteas.com";
									 send_sms($mob,$smstext);
			         
			   
			  
				    echo "Member Id Successfully Activated.";
			       }
			       else
			       {
				   echo "Something wrong please check.";
			       }
			    }
			else
			{
			 echo "Transaction Password Wrong";
			}
			}
          else
			{
			 echo "You Do Not Have Available PIN";
			}


			
		}
		else
		{
			echo "Please Complete Form";
		}
  }
 else if($action=="view-activate")
	{
		?>
		<script>
$('#dataTables-example').dataTable();
</script>
        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTables-example">
                                    <thead>
                                        <tr>
										    <th>SL NO</th>
											 <th>ACTIVATION DATE</th>
											  <th>ACTIVATED ID</th>
                                            <th>NUMBER OF PIN</th>
											 <th>PACKAGE AMOUNT</th>
											  <th>BV</th>
                                          
											
											
                                           
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									require "conn.php";
									 $sl=1;
									 session_start();
									$cid=$_SESSION['cid'];
									$sql="select * from   tbl_use_pin  where cid='$cid' order by trans_dt desc";
									  $rs=mysqli_query($conn,$sql);
									  while($row=mysqli_fetch_assoc($rs))
									  {
										    echo'<td>'.$sl.'</td>';
										    echo'<td>'.$row['trans_dt'].'</td>';
											echo'<td>'.$row['activate_member_id'].'</td>';
											echo'<td>'.$row['no_of_pin'].'</td>';
											echo'<td>'.$row['no_of_pin'] * 750 .'</td>';
											echo'<td>'.$row['no_of_pin']* 450 .'</td>';
											
											
										
										
											
																				 
                                        echo"</tr>";
										$sl++;
									  }
									  ?>
                                        </tbody>
                                        </table>
                                        </div>
        
        <?php
	
	}
	function getName($cid)
	{
		require("conn.php");
		$sql="select name as name from candidate where cid='$cid'";
		$smt=mysqli_query($conn,$sql);
		$rs=mysqli_fetch_assoc($smt);
		return($rs['name']);
	}		
	function getMobile($cid)
	{
		require("conn.php");
		$sql="select mobile as mobile from candidate where cid='$cid'";
		$smt=mysqli_query($conn,$sql);
		$rs=mysqli_fetch_assoc($smt);
		return($rs['mobile']);
	}
	function send_sms($mob,$smstext)
			{
					$url="http://bhashsms.com/api/sendmsg.php";
			$user="prakashgroup";
			$password="7544991791";
			$snderid="BIMPLR";
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